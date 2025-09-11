<div>
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
                        <p><span class="font-medium">site Type:</span> 2</p>
                        <p><span class="font-medium">User ID:</span> 2</p>
                        <p><span class="font-medium">Created At:</span> 2025-09-11 06:06:36</p>
                        <p><span class="font-medium">Updated At:</span> 2025-09-11 06:06:36</p>
                    </div>
                    <div class="flex items-center justify-end gap-2 text-sm">

                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
