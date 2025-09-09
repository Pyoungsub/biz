@push('scripts')
    <script src="https://js.tosspayments.com/v2/standard"></script>
@endpush
<div class="max-w-5xl mx-auto">
  <section class="bg-gray-50 py-8">
    <div class="container mx-auto px-4">
      <div class="flex flex-col md:flex-row items-center md:items-start gap-6">
        
        <!-- 이미지 -->
        <div class="flex-1">
          <img src="{{ asset('images/payment.jpg') }}" 
              alt="Secure Payment" 
              class="rounded-xl shadow-lg w-full object-cover">
        </div>

        <!-- 상품 설명 -->
        <div class="flex-1 bg-white rounded-2xl shadow-soft p-6 w-full md:w-auto">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">Biz Groupket Subscription</h3>
          <ul class="space-y-3">
            <li class="flex justify-between border-b pb-2">
              <span>1 Month</span>
              <span class="font-semibold text-gray-900">₩220,000</span>
            </li>
            <li class="flex justify-between border-b pb-2">
              <span>6 Months</span>
              <span class="font-semibold text-gray-900">₩990,000</span>
            </li>
            <li class="flex justify-between">
              <span>1 Year</span>
              <span class="font-semibold text-gray-900">₩1,320,000</span>
            </li>
          </ul>

          <p class="text-gray-500 text-sm mt-4">
            All payments are secure and encrypted. You can receive a tax invoice after purchase.
          </p>
        </div>
        
      </div>
    </div>
  </section>
  <div class="mt-4 px-4 sm:px-0">
    <button class="button w-full rounded-lg bg-brand-600 hover:bg-brand-700 py-2 text-white font-bold" onclick="requestPayment()">결제하기</button>
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
  <x-sla />
    


   



   

    
</div>
