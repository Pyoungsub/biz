@push('scripts')
    <script src="https://js.tosspayments.com/v2/standard"></script>
@endpush
<div class="max-w-5xl mx-auto" x-data="{id:$wire.entangle('id')}">
    <div class="min-h-[calc(100vh-65px)] bg-gray-50 flex flex-col md:flex-row">
        <div class="md:w-1/2 relative">
            <img src="{{ asset('images/payment.jpg') }}" 
                alt="Checkout Image" 
                class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-25 flex items-center justify-center">
                <h1 class="text-white text-3xl md:text-4xl font-bold">Secure Checkout</h1>
            </div>
        </div>
        <div class="w-full md:w-1/2 flex flex-col justify-center p-8 space-y-6">
            <!-- 선택된 플랜 카드 -->
            <div class="bg-white rounded-2xl shadow-lg p-6 flex flex-col items-center space-y-4 w-full">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800 capitalize">{{$order_name}}</h2>
                <p class="text-gray-600 text-center">{{__('For growing blogs. Save more and enjoy premium features.')}}</p>
                <div class="text-4xl font-extrabold text-blue-600">￦{{number_format($amount)}}</div>
                <button onclick="requestPayment()" class="bg-blue-600 text-white w-full py-3 rounded-xl font-semibold hover:bg-blue-700 transition">
                    {{__('Pay with TossPayments')}}
                </button>
                <!-- 결제 관련 안내 -->
                <p class="text-sm text-gray-400 mt-2 text-center">
                {{__('You will be redirected to a secure TossPayments page to complete your purchase.')}}</p>
                <div class="mt-2 flex items-center justify-end gap-2">
                    <x-sla />
                    <x-refund-policy />    
                </div>
            </div>
        </div>

    </div>  
    <script>
        // ------  SDK 초기화 ------
        const clientKey = "{{ config('services.toss.client_key') }}";
        const customerKey = "{{ auth()->user()->email }}";
        const tossPayments = TossPayments(clientKey);
        // 회원 결제
        // @docs https://docs.tosspayments.com/sdk/v2/js#tosspaymentspayment
        const payment = tossPayments.payment({ customerKey });
        // 비회원 결제
        // const payment = tossPayments.payment({customerKey: TossPayments.ANONYMOUS})

        // ------ '결제하기' 버튼 누르면 결제창 띄우기 ------
        // @docs https://docs.tosspayments.com/sdk/v2/js#paymentrequestpayment
        async function requestPayment() {
        // 결제를 요청하기 전에 orderId, amount를 서버에 저장하세요.
        // 결제 과정에서 악의적으로 결제 금액이 바뀌는 것을 확인하는 용도입니다.
        await payment.requestPayment({
            method: "CARD", // 카드 결제
            amount: {
            currency: "KRW",
            value: {{ $amount }},
            },
            orderId: "{{ $order_id }}", // 고유 주문번호
            orderName: "{{ $order_name }}",
            successUrl: "{{ config('services.toss.success_url') }}", // 결제 요청이 성공하면 리다이렉트되는 URL
            failUrl: "{{ config('services.toss.fail_url') }}", // 결제 요청이 실패하면 리다이렉트되는 URL
            customerEmail: "{{ auth()->user()->email }}",
            customerName: "{{ auth()->user()->name }}",
            // 카드 결제에 필요한 정보
            card: {
            useEscrow: false,
            flowMode: "DEFAULT", // 통합결제창 여는 옵션
            useCardPoint: false,
            useAppCardOnly: false,
            },
        });
        }
    </script>
</div>
