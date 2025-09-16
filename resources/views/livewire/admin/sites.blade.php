<div
    x-data='{
        servers:@json($servers),
        server_id:$wire.entangle("server_id")
    }'
    x-init="console.log(servers)"
>
    @if(count($sites)>0)
        <div class="mt-4">
            @foreach($sites as $site)
                <div class="bg-white shadow rounded-xl p-6 space-y-4 w-full" wire:key="{{$site->id}}">
                    <div class="flex justify-between items-center">
                        <h3 class="text-lg font-semibold text-gray-700">Site #{{$site->id}}</h3>
                        @if($site->dns_record)
                            <div class="flex items-center gap-2">
                                <button class="text-xs font-medium">{{__('set period')}}</button>
                                <span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-700">{{$site->dns_record->server->ip_address}}</span>
                            </div>
                        @else
                            <button class="px-2 py-1 text-xs font-medium rounded-full bg-yellow-100 text-yellow-700" wire:click="openConnectServerModal({{$site->id}})" wire:loading.attr="disabled">connect server</button>
                        @endif
                    </div>
                    <p class="text-gray-600 text-sm">{{$site->site}}</p>    
                    <div class="text-xs text-gray-500 space-y-1">
                        <p><span class="font-medium">User Name:</span> {{$site->user->name}}</p>
                        <p><span class="font-medium">User Email:</span> {{$site->user->email}}</p>
                        <p><span class="font-medium">Created At:</span> {{$site->last_site_payment->created_at}}</p>
                        <p><span class="font-medium">Updated At:</span> {{$site->last_site_payment->updated_at}}</p>
                    </div>
                    <div class="flex items-center justify-end gap-2 text-sm">

                    </div>
                </div>
            @endforeach
        </div>
    @endif
    <x-dialog-modal wire:model.live="connectServerModal" maxWidth="sm">
        <x-slot name="title">
            Connect Server
        </x-slot>
        <x-slot name="content">
            <select name="" id="" x-model="server_id">
                <option value="" disabled selected>--select--</option>
                <template x-for="server in servers" :key="server.id">
                    <option :value="server.id" x-text="server.ip_address"></option>
                </template>
            </select>
        </x-slot>
        <x-slot name="footer">
            <x-secondary-button wire:click="$set('connectServerModal', false)" wire:loading.attr="disabled">
                {{ __('Close') }}
            </x-secondary-button>
            <x-button class="ms-4" wire:click="connectServer" wire:loading.attr="disabled">
                {{ __('Confirm') }}
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
