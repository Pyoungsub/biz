<div>
    <x-slot name="header">
        Inquiries
    </x-slot>
    <div class="flex items-center gap-2">
        <button>{{__('new')}}</button>
        <button>{{__('in_progress')}}</button>
        <button>{{__('waiting')}}</button>
        <button>{{__('resolved')}}</button>
        <button>{{__('closed')}}</button>
    </div>
    @if(count($inquiries)>0)
        <div class="mt-4">
            @foreach($inquiries as $inquiry)
                <div class="max-w-md bg-white shadow rounded-xl p-6 space-y-4" wire:key="{{$inquiry->id}}">
                    <div class="flex justify-between items-center">
                        <h3 class="text-lg font-semibold text-gray-700">Inquiry #{{$inquiry->id}}</h3>
                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-700">{{$inquiry->status}}</span>
                    </div>
                    <p class="text-gray-600 text-sm">안녕하세요 심평섭입니다.</p>
                    <div class="text-xs text-gray-500 space-y-1">
                        <p><span class="font-medium">Inquiry Type:</span> 2</p>
                        <p><span class="font-medium">User ID:</span> 2</p>
                        <p><span class="font-medium">Created At:</span> 2025-09-11 06:06:36</p>
                        <p><span class="font-medium">Updated At:</span> 2025-09-11 06:06:36</p>
                    </div>
                    <div class="flex items-center justify-end gap-2 text-sm">
                        <button wire:click="setStatus('new', {{$inquiry->id}})">{{__('new')}}</button>
                        <button wire:click="setStatus('in_progress', {{$inquiry->id}})">{{__('in_progress')}}</button>
                        <button wire:click="setStatus('wating', {{$inquiry->id}})">{{__('waiting')}}</button>
                        <button wire:click="setStatus('resolved', {{$inquiry->id}})">{{__('resolved')}}</button>
                        <button wire:click="setStatus('closed', {{$inquiry->id}})">{{__('closed')}}</button>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
