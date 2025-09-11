<div>
    <x-slot name="header">
        Inquiries
    </x-slot>
    <div class="space-y-2">
        <div class="flex flex-wrap items-center gap-2 text-xs">
            <button wire:click="setInquiryType(null)" 
                class="px-3 py-1 rounded {{ $inquiry_type_id === null ? 'bg-blue-500 text-white' : 'bg-gray-200' }}">
                {{ __('all') }}
            </button>
            <button wire:click="setInquiryType(1)" 
                class="px-3 py-1 rounded {{ $inquiry_type_id === 1 ? 'bg-blue-500 text-white' : 'bg-gray-200' }}">
                {{ __('서비스 관련') }}
            </button>
            <button wire:click="setInquiryType(2)" 
                class="px-3 py-1 rounded {{ $inquiry_type_id === 2 ? 'bg-blue-500 text-white' : 'bg-gray-200' }}">
                {{ __('결제 문의') }}
            </button>
            <button wire:click="setInquiryType(3)" 
                class="px-3 py-1 rounded {{ $inquiry_type_id === 3 ? 'bg-blue-500 text-white' : 'bg-gray-200' }}">
                {{ __('기술 지원') }}
            </button>
            <button wire:click="setInquiryType(4)" 
                class="px-3 py-1 rounded {{ $inquiry_type_id === 4 ? 'bg-blue-500 text-white' : 'bg-gray-200' }}">
                {{ __('기타') }}
            </button>
        </div>
        <div class="pt-2 flex flex-wrap items-center gap-2 text-xs border-t">
            <button wire:click="getStatus(null)" 
                class="px-3 py-1 rounded {{ $status === null ? 'bg-blue-500 text-white' : 'bg-gray-200' }}">
                {{ __('all') }}
            </button>
            <button wire:click="getStatus('new')" 
                class="px-3 py-1 rounded {{ $status === 'new' ? 'bg-blue-500 text-white' : 'bg-gray-200' }}">
                {{ __('new') }}
            </button>
            <button wire:click="getStatus('in_progress')" 
                class="px-3 py-1 rounded {{ $status === 'in_progress' ? 'bg-blue-500 text-white' : 'bg-gray-200' }}">
                {{ __('in_progress') }}
            </button>
            <button wire:click="getStatus('waiting')" 
                class="px-3 py-1 rounded {{ $status === 'waiting' ? 'bg-blue-500 text-white' : 'bg-gray-200' }}">
                {{ __('waiting') }}
            </button>
            <button wire:click="getStatus('resolved')" 
                class="px-3 py-1 rounded {{ $status === 'resolved' ? 'bg-blue-500 text-white' : 'bg-gray-200' }}">
                {{ __('resolved') }}
            </button>
            <button wire:click="getStatus('closed')" 
                class="px-3 py-1 rounded {{ $status === 'closed' ? 'bg-blue-500 text-white' : 'bg-gray-200' }}">
                {{ __('closed') }}
            </button>
        </div>
    </div>
    
    @if(count($inquiries)>0)
        <div class="mt-4">
            @foreach($inquiries as $inquiry)
                <div class="bg-white shadow rounded-xl p-6 space-y-4 w-full" wire:key="{{$inquiry->id}}">
                    <div class="flex justify-between items-center">
                        <h3 class="text-lg font-semibold text-gray-700">Inquiry #{{$inquiry->id}}</h3>
                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-700">{{$inquiry->status}}</span>
                    </div>
                    <p class="text-gray-600 text-sm">{{$inquiry->message}}</p>
                    <div class="text-xs text-gray-500 space-y-1">
                        <p><span class="font-medium">Inquiry Type:</span> 2</p>
                        <p><span class="font-medium">User ID:</span> 2</p>
                        <p><span class="font-medium">Created At:</span> 2025-09-11 06:06:36</p>
                        <p><span class="font-medium">Updated At:</span> 2025-09-11 06:06:36</p>
                    </div>
                    <div class="flex items-center justify-end gap-2 text-sm">
                        <button wire:click="setStatus('new', {{$inquiry->id}})">{{__('new')}}</button>
                        <button wire:click="setStatus('in_progress', {{$inquiry->id}})">{{__('in_progress')}}</button>
                        <button wire:click="setStatus('waiting', {{$inquiry->id}})">{{__('waiting')}}</button>
                        <button wire:click="setStatus('resolved', {{$inquiry->id}})">{{__('resolved')}}</button>
                        <button wire:click="setStatus('closed', {{$inquiry->id}})">{{__('closed')}}</button>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
