<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Redis;
use App\Models\InquiryType;
use Livewire\Component;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
class ContactForm extends Component
{
    /*
    //나중에 관리자 페이지에서 slug 추가 제거 할때 사용할 것
    function createOrRestoreInquiryType($slug, $name)
    {
        // slug 가 삭제된 상태로 존재하면 restore
        $existing = InquiryType::withTrashed()->where('slug', $slug)->first();

        if ($existing) {
            if ($existing->trashed()) {
                $existing->restore();
            }
            // 이름 업데이트 가능하게
            $existing->update(['inquiry_type' => $name]);
            return $existing;
        }

        // 없으면 새로 생성
        return InquiryType::create([
            'slug' => $slug,
            'inquiry_type' => $name,
        ]);
    }
    */
    public $inquiry_types = [];
    public $inquiry_type_id;
    public $name;
    public $email;
    public $mobile;
    public $message;
    public $showVerificationForm = false;
    public function getInquiryTypesFromDB()
    {
        // Return [id => slug] array (or [id => name] depending on usage)
        return InquiryType::select('id', 'inquiry_type', 'slug')->get()->toArray();
    }

    public function getInquiryTypesFromRedis()
    {
        $data = Redis::get('inquiry_types');
        return $data ? json_decode($data, true) : [];
    }

    public function storeInquiryTypesToRedis($data)
    {
        // Store as JSON, expire in 1 day (86400 seconds)
        Redis::setex('inquiry_types', 86400, json_encode($data));
    }
    public function save()
    {
        /*
        $key = 'submit-message:' . request()->ip();
        // Check if the action is rate limited
        if (RateLimiter::tooManyAttempts($key, 3)) {
            $availableAt = RateLimiter::availableIn($key);
            $timeLeft = gmdate('H:i:s', $availableAt);
            $this->reset(['inquiry_type_id', 'name', 'email', 'mobile', 'message']);
            $this->dispatch('tooManyAttempts');
            return;
        }
        RateLimiter::hit($key, now()->diffInSeconds(now()->endOfDay()));
        */
        $validated = $this->validate([ 
            'name' => 'required|min:2',
            'email' => 'required|email:rfc,dns',
            'mobile' => ['required', 'regex:/^(01[0-9])[-]?[0-9]{3,4}[-]?[0-9]{4}$/'],
            'message' => 'required|min:3',
        ]);
        // Generate a 6-digit verification code
        $code = rand(100000, 999999);
        
        $code = 123456;
        // Store the hashed code in cache for 5 minutes
        $cacheKey = 'inquiry_verification:' . $validated['email'];
        Cache::put($cacheKey, Hash::make($code), now()->addMinutes(5));
        // Send the code via email
        //Mail::to($validated['email'])->send(new \App\Mail\SendVerificationCode($code, $validated['name']));
        $this->email = $validated['email'];
        $this->showVerificationForm = true;
    }
    public function verifyCode()
    {
        $cacheKey = 'inquiry_verification:' . $this->email;
        if (!Cache::has($cacheKey)) {
            $this->dispatch('codeExpired'); // optional JS event
            return;
        }
        if (Hash::check($this->inputCode, Cache::get($cacheKey))) {
            $this->dispatch('codeVerified'); // optional JS event
            Cache::forget($cacheKey);
            // Now you can store the inquiry in DB
        } else {
            //required add to rate limit as well
            $this->dispatch('codeInvalid'); // optional JS event
        }
    }
    public function mount()
    {
        $this->inquiry_types = $this->getInquiryTypesFromRedis();
        if (empty($this->inquiry_types)) {
            $this->inquiry_types = $this->getInquiryTypesFromDB();
            $this->storeInquiryTypesToRedis($this->inquiry_types);
        }
    }
    public function render()
    {
        return view('livewire.contact-form');
    }
}
