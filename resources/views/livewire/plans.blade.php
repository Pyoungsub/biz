<div class="">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Plans</h2>
    </x-slot>
    <!-- List -->
    <div class="mx-auto max-w-6xl px-4 sm:px-6 py-8">
        <div wire:loading.flex class="justify-center py-12">
            <div class="h-8 w-8 border-4 border-indigo-600 border-t-transparent rounded-full animate-spin"></div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" wire:loading.remove>
            @forelse($plans as $plan)
                <article class="rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-4 shadow-sm hover:shadow-md transition">
                    <h2 class="text-lg font-semibold text-slate-800 dark:text-slate-100">{{ $plan->plan->name }}</h2>
                    <p class="mt-2 text-sm text-slate-600 dark:text-slate-400 line-clamp-3">{{ $plan->plan->duration_months }} month</p>
                </article>
            @empty
                <p class="text-center text-slate-500 dark:text-slate-400">No plans found.</p>
            @endforelse
        </div>
        <!-- Pagination -->
        <div class="mt-8">
            {{ $plans->links() }}
        </div>
    </div>
</div>