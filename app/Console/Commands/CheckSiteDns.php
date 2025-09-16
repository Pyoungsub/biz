<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\SiteDnsSetting;
use Illuminate\Support\Facades\DB;
class CheckSiteDns extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:check-site-dns';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check DNS records of sites with pending status and update their status';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $site_dns_settings = SiteDnsSetting::with('site.dns_record.server')->where('status', 'pending')->get();
        $updates = [
            'confirmed' => [],
            'retry' => [],
            'failed' => [],
        ];
        foreach ($site_dns_settings as $site_dns_setting) {
            $isConfirmed = false;
            $records = dns_get_record($site_dns_setting->site->site, DNS_A);
            if (collect($records)->contains(fn($r) => $r['ip'] === $site_dns_setting->site->dns_record->server->ip_address)) {
                $isConfirmed = true;
            }
            if ($isConfirmed) {
                $updates['confirmed'][] = $site_dns_setting->id;
            } else {
                // 시도 횟수 24번 미만 → retry
                if ($site_dns_setting->dns_check_attempts < 23) {
                    $updates['retry'][] = $site_dns_setting->id;
                } else {
                    $updates['failed'][] = $site_dns_setting->id;
                }
            }
        }
        // ✅ bulk update: confirmed
        if (!empty($updates['confirmed'])) {
            SiteDnsSetting::whereIn('id', $updates['confirmed'])
            ->update([
                'status' => 'confirmed',
                'updated_at' => now(),
                'dns_check_attempts' => DB::raw('dns_check_attempts + 1'),
            ]);
        }
        // ✅ bulk update: retry (pending 유지 + 시도 횟수 증가)
        if (!empty($updates['retry'])) {
            SiteDnsSetting::whereIn('id', $updates['retry'])
            ->update([
                'updated_at' => now(),
                'dns_check_attempts' => DB::raw('dns_check_attempts + 1'),
            ]);
        }
        // ✅ bulk update: failed
        if (!empty($updates['failed'])) {
            SiteDnsSetting::whereIn('id', $updates['failed'])
            ->update([
                'status' => 'failed',
                'updated_at' => now(),
                'dns_check_attempts' => DB::raw('dns_check_attempts + 1'),
            ]);
        }
    }
}
