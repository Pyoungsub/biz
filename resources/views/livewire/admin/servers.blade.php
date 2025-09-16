<div>
    <div class="">
        <button class="flex items-center gap-2 font-bold" wire:click="addServer">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6.01" y2="6"></line><line x1="6" y1="18" x2="6.01" y2="18"></line></svg>
            <span>Add Server</span>
        </button>
    </div>
    @if(count($servers)>0)
        <div class="mt-4 space-y-4">
            @foreach($servers as $server)
                <div class="bg-white shadow rounded-xl p-6 space-y-4 w-full" wire:key="{{$server->id}}">
                    <div class="flex justify-between items-center">
                        <h3 class="text-lg font-semibold text-gray-700">server #{{$server->id}}</h3>
                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-700">{{$server->ip_address}}</span>
                    </div>
                    <p class="text-gray-600 text-sm">{{$server->name}}</p>
                    <div class="text-xs text-gray-500 space-y-1">
                        <p><span class="font-medium">Server Capacity:</span> {{$server->dns_records_count}}/{{$server->capacity}}</p>
                        <p><span class="font-medium">Created At:</span> {{$server->created_at}}</p>
                        <p><span class="font-medium">Updated At:</span> {{$server->updated_at}}</p>
                    </div>
                    <div class="flex items-center justify-end gap-2 text-sm">

                    </div>
                </div>
            @endforeach
        </div>
    @endif
    <div class="" x-data="{ ip_address: $wire.entangle('ip_address'), ip_address_valid: $wire.entangle('ip_address_valid') }">
        <x-dialog-modal wire:model.live="addServerModel" maxWidth="sm">
            <x-slot name="title">
                Add Server
            </x-slot>
            <x-slot name="content">
                <x-label for="name" value="서버명(별칭)" />
                <x-input id="name" type="text" wire:model="name" class="w-full" placeholder="램32기가, 2테라" />
                <x-label for="ip_address" value="IP Address(고유값)" class="mt-4" />
                <x-input id="ip_address" type="text" x-model="ip_address" class="w-full" @input="ip_address_valid = /^((25[0-5]|2[0-4][0-9]|1?[0-9]{1,2})\.){3}(25[0-5]|2[0-4][0-9]|1?[0-9]{1,2})$/.test(ip_address)" placeholder="Enter IP address" />
                <p x-show="!ip_address_valid" class="text-red-500 text-sm mt-1">Invalid IP address</p>
                <x-label for="capacity" value="최대 갯수" class="mt-4" />
                <x-input id="capacity" type="tel" x-mask="999" wire:model="capacity" class="w-full" placeholder="10" />
            </x-slot>
            <x-slot name="footer">
                <x-secondary-button wire:click="$set('addServerModel', false)" wire:loading.attr="disabled">
                    {{ __('Close') }}
                </x-secondary-button>
                <x-button class="ms-4" wire:click="saveServer" wire:loading.attr="disabled">
                    {{ __('Confirm') }}
                </x-button>
            </x-slot>
        </x-dialog-modal>
    </div>
</div>

