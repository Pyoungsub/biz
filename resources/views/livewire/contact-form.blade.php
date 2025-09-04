<section class="bg-gray-50 dark:bg-gray-900 py-12"
    x-data='{ 
        inquiryTypes: @json($inquiry_types), 
        selectedTopic: "",
        inquiry_type_id:$wire.entangle("inquiry_type_id"),
        name:$wire.entangle("name"),
        email:$wire.entangle("email"),
        mobile:$wire.entangle("mobile"),
        message:$wire.entangle("message"),
        verification_code:"",
    }'
>
    @if(!$showVerificationForm)
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold text-gray-900 dark:text-gray-100 sm:text-4xl">문의사항이 있으신가요?</h2>
                <p class="mt-4 text-gray-600 dark:text-gray-300">아래 양식을 작성해 주시면 빠르게 답변드리겠습니다.</p>
            </div>

            <form class="bg-white dark:bg-gray-800 shadow-md rounded-2xl p-8 space-y-6" wire:submit="save">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div>
                        <label for="topic" class="block text-sm font-medium text-gray-700 dark:text-gray-300">문의 유형</label>
                        <select x-model="inquiry_type_id" id="topic" name="topic"
                            class="mt-1 block w-full rounded-xl border border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-700 px-4 py-3 text-gray-900 dark:text-gray-100 shadow-sm focus:border-brand-500 focus:ring-1 focus:ring-brand-500 focus:ring-opacity-50 transition-all duration-200">
                            <option value="">선택해주세요</option>
                            <template x-for="inquiry_type in inquiryTypes" :key="inquiry_type.id">
                                <option :value="inquiry_type.id" x-text="inquiry_type.inquiry_type"></option>
                            </template>
                        </select>
                    </div>
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">이름</label>
                        <input x-model="name" type="text" id="name" name="name" placeholder="홍길동"
                            class="mt-1 block w-full rounded-xl border border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-700 px-4 py-3 text-gray-900 dark:text-gray-100 placeholder-gray-400 dark:placeholder-gray-400 shadow-sm focus:border-brand-500 focus:ring-1 focus:ring-brand-500 focus:ring-opacity-50 transition-all duration-200">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">이메일</label>
                        <input x-model="email" type="email" id="email" name="email" placeholder="example@mail.com"
                            class="mt-1 block w-full rounded-xl border border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-700 px-4 py-3 text-gray-900 dark:text-gray-100 placeholder-gray-400 dark:placeholder-gray-400 shadow-sm focus:border-brand-500 focus:ring-1 focus:ring-brand-500 focus:ring-opacity-50 transition-all duration-200">
                    </div>
                    <div>
                        <label for="mobile" class="block text-sm font-medium text-gray-700 dark:text-gray-300">연락처</label>
                        <input x-model="mobile" type="tel" id="mobile" name="mobile" x-mask="999-9999-9999" placeholder="010-1234-5678"
                            class="mt-1 block w-full rounded-xl border border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-700 px-4 py-3 text-gray-900 dark:text-gray-100 placeholder-gray-400 dark:placeholder-gray-400 shadow-sm focus:border-brand-500 focus:ring-1 focus:ring-brand-500 focus:ring-opacity-50 transition-all duration-200">
                    </div>
                </div>
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300">문의 내용</label>
                    <textarea x-model="message" id="message" name="message" rows="5" placeholder="문의 내용을 작성해주세요."
                        class="mt-1 block w-full rounded-xl border border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-700 px-4 py-3 text-gray-900 dark:text-gray-100 placeholder-gray-400 dark:placeholder-gray-400 shadow-sm focus:border-brand-500 focus:ring-1 focus:ring-brand-500 focus:ring-opacity-50 transition-all duration-200 resize-none"></textarea>
                </div>
                <x-action-message class="me-3 text-red-700" on="tooManyAttempts">
                    {{ __('Too many submission attempts. Please try again tomorrow.') }}
                </x-action-message>
                <div class="text-center">
                    <button type="submit"
                        class="inline-flex items-center justify-center px-8 py-3 bg-brand-600 hover:bg-brand-700 text-white font-semibold rounded-xl shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-500 transition-all duration-200">
                        문의하기
                    </button>
                </div>
            </form>
        </div>
    @else
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold text-gray-900 dark:text-gray-100 sm:text-4xl">이메일 인증</h2>
                <p class="mt-4 text-gray-600 dark:text-gray-300">
                    입력하신 이메일로 발송된 인증 코드를 입력해주세요.
                </p>
            </div>

            <form class="bg-white dark:bg-gray-800 shadow-md rounded-2xl p-8 space-y-6" wire:submit="verifyCode">
                <div>
                    <label for="verification_code" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                        인증 코드
                    </label>
                    <input x-model="verification_code" type="text" id="verification_code" name="verification_code" 
                        maxlength="6" placeholder="6자리 숫자"
                        class="mt-1 block w-full rounded-xl border border-gray-200 dark:border-gray-700 
                                bg-gray-50 dark:bg-gray-700 px-4 py-3 text-gray-900 dark:text-gray-100 
                                placeholder-gray-400 dark:placeholder-gray-400 shadow-sm 
                                focus:border-brand-500 focus:ring-1 focus:ring-brand-500 
                                focus:ring-opacity-50 transition-all duration-200 tracking-widest text-center text-2xl">
                </div>

                <x-action-message class="me-3 text-red-700" on="invalidCode">
                    {{ __('Invalid verification code. Please try again.') }}
                </x-action-message>

                <div class="text-center">
                    <button type="submit"
                        class="inline-flex items-center justify-center px-8 py-3 bg-brand-600 hover:bg-brand-700 
                            text-white font-semibold rounded-xl shadow-md 
                            focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-500 
                            transition-all duration-200">
                        확인
                    </button>
                </div>

                <div class="text-center mt-4">
                    <button type="button" wire:click="resendCode"
                        class="text-sm text-brand-600 hover:text-brand-700 font-medium transition-all duration-200">
                        인증 코드 재전송
                    </button>
                </div>
            </form>
        </div>
    @endif
</section>
