<x-dialog-modal wire:model.live="setModal" maxWidth="sm">
    <x-slot name="title">
        Custom Domain (CNAME)
    </x-slot>

    <x-slot name="content">
        <div class="space-y-4">
            <div class="flex rounded-lg shadow-sm">
                <span class="inline-flex items-center px-3 rounded-l-lg border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                    https://
                </span>
                <input 
                    type="url"
                    wire:model="site"
                    placeholder="yourblog.example.com"
                    class="flex-1 block w-full rounded-none rounded-r-lg border-gray-300 focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                >
            </div>
            <button 
                type="button"
                wire:click="saveCustomSite"
                class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg font-semibold hover:bg-blue-700 transition">
                Save
            </button>
            <p class="text-sm text-gray-500">
                Enter your custom domain and click <strong>Save</strong>.  
                Don’t forget to configure your DNS CNAME record.
            </p>
        </div>
        @if ($errors->any())
            <div class="text-red-500 text-sm mt-1">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif
        @if(count($sites) > 0)
            <ul class="mt-4">
                @foreach($sites as $site)
                    <li wire:key="$site->id">{{$site->site}}</li>
                @endforeach
            </ul>
        @endif
    </x-slot>

    <x-slot name="footer">
        <x-secondary-button wire:click="$set('setModal', false)" wire:loading.attr="disabled">
            {{ __('Close') }}
        </x-secondary-button>
    </x-slot>
</x-dialog-modal>