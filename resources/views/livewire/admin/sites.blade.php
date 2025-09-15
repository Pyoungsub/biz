<div
    x-data='{
        servers:@json($servers)
    }'
    x-init="console.log(servers)"
>
    @if(count($sites)>0)
        <div class="mt-4">
            @foreach($sites as $site)
                <div class="bg-white shadow rounded-xl p-6 space-y-4 w-full" wire:key="{{$site->id}}">
                    <div class="flex justify-between items-center">
                        <h3 class="text-lg font-semibold text-gray-700">Site #{{$site->id}}</h3>
                        <span class="px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-700">{{$site->site}}</span>
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
</div>
