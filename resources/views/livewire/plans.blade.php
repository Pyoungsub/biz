<div class="">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Plans</h2>
    </x-slot>
    <!-- List -->
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div wire:loading.flex class="justify-center py-12">
            <div class="h-8 w-8 border-4 border-indigo-600 border-t-transparent rounded-full animate-spin"></div>
        </div>

        <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" wire:loading.remove>
            @forelse($payments as $payment)
                <article class="rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-4 shadow-sm hover:shadow-md transition">
                    <h2 class="text-lg font-semibold text-slate-800 dark:text-slate-100 capitalize">{{ $payment->plan->name }}</h2>
                    @if($payment->site_payment)
                        <p>{{$payment->site_payment->site->site}}</p>
                        @if($payment->site_payment->site->site_dns_setting)
                            @if($payment->site_payment->site->dns_record)
                                <p class="text-gray-600 text-sm">{{$payment->site_payment->site->dns_record->server->ip_address}}</p>
                            @endif
                            <div class="flex items-start gap-2">
                                @switch($payment->site_payment->site->site_dns_setting->status)
                                    @case('pending')
                                        <span class="text-gray-600 text-sm rounded border border-gray-600 px-2">{{__('pending')}}</span>
                                        @break
                                    @case('confirmed')
                                        <div class="">
                                            <p class="text-gray-600 text-sm">시작일: {{ $payment->site_payment->site->last_site_payment?->start_date ?? '대기중' }}</p>
                                            <p class="text-gray-600 text-sm">종료일: {{ $payment->site_payment->site->last_site_payment?->end_date ?? '대기중' }}</p>
                                        </div>
                                        @break
                                    @default
                                        <span>{{__('failed')}}</span>
                                @endswitch
                            </div>
                        @else
                            @if($payment->site_payment->site->dns_record)
                                <div class="flex items-center gap-2">
                                    <p class="text-gray-600 text-sm">{{$payment->site_payment->site->dns_record->server->ip_address}}</p>
                                    <button class="text-gray-600 text-sm rounded border border-gray-600 px-2" wire:click="confirmed({{$payment->site_payment->site->id}})" wire:confirm="CNAME에 IP4 Address를 입력하셨습니까?" wire:loading.attr="disabled">
                                        적용완료
                                    </button>
                                </div>
                                
                            @endif
                        @endif
                    @else
                        <button x-on:click="$dispatch('set-payment-site', {paymentId: {{$payment->id}} })">url 등록하기</button>
                    @endif
                    <p class="mt-2 text-sm text-slate-600 dark:text-slate-400 line-clamp-3">{{ $payment->plan->duration_months }} month</p>
                </article>
            @empty
                <div class="col-span-3 flex flex-col items-center justify-center py-16 space-y-4">
                    <svg class="w-12 h-12 text-gray-400 dark:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m0-4h.01M12 20c4.418 0 8-3.582 8-8s-3.582-8-8-8-8 3.582-8 8 3.582 8 8 8z" />
                    </svg>
                    <p class="text-lg text-gray-500 dark:text-gray-400 font-medium">No plans found.</p>
                    <a href="" class="px-4 py-2 bg-indigo-600 text-white rounded-lg shadow hover:bg-indigo-700 transition">
                        Create your first plan
                    </a>
                </div>
            @endforelse
        </div>
        <!-- Pagination -->
        <div class="mt-8">
            {{ $payments->links() }}
        </div>
    </div>
    <livewire:set-payment-site @changed="$refresh" />
</div>