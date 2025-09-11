<section class="">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Inquiries</h2>
    </x-slot>
    <div class="mt-8 max-w-7xl mx-auto px-4 sm:px-6">
        <div class="rounded-2xl border border-slate-200 dark:border-slate-800 p-8 sm:p-10 bg-gradient-to-br from-brand-50 to-white dark:from-slate-900 dark:to-slate-900 shadow-soft">
            <div class="mb-8 text-center">
                <h3 class="text-2xl font-extrabold tracking-tight">내가 접수한 문의사항</h3>
                <p class="text-slate-600 dark:text-slate-300 mt-2">
                    고객과의 소통이 기업의 가치를 만듭니다. 지금까지 접수된 문의 내역을 확인하세요.
                </p>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full border border-slate-200 dark:border-slate-700 rounded-xl overflow-hidden">
                    <thead class="bg-slate-100 dark:bg-slate-800">
                        <tr>
                            <th class="w-20 px-4 py-3 text-left font-semibold text-slate-700 dark:text-slate-200">상태</th>
                            <th class="px-4 py-3 text-left font-semibold text-slate-700 dark:text-slate-200">문의종류</th>
                            <th class="sm:w-48 px-4 py-3 text-left font-semibold text-slate-700 dark:text-slate-200">등록일</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white dark:bg-slate-900">
                        @forelse($inquiries as $inquiry)
                            <tr class="border-t border-slate-200 dark:border-slate-700">
                                <td class="px-4 py-3">
                                    <span class="inline-flex px-2 py-1 text-xs font-medium rounded-full 
                                        {{ $inquiry->status === 'answered' 
                                            ? 'bg-green-100 text-green-700 dark:bg-green-800 dark:text-green-200' 
                                            : 'bg-yellow-100 text-yellow-700 dark:bg-yellow-800 dark:text-yellow-200' }}">
                                        {{ $inquiry->status }}
                                    </span>
                                </td>
                                <td class="px-4 py-3">{{ $inquiry->inquiry_type->inquiry_type }}</td>
                                <td class="px-4 py-3 text-sm">{{ $inquiry->created_at->format('Y-m-d') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="px-4 py-6 text-center text-slate-500 dark:text-slate-400">
                                    접수된 문의사항이 없습니다.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-6">
                {{ $inquiries->links() }}
            </div>
        </div>
    </div>
</section>
