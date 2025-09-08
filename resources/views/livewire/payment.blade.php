@push('scripts')
    <script src="https://js.tosspayments.com/v2/standard"></script>
@endpush
<div class="max-w-7xl mx-auto">
    <!-- 결제하기 버튼 -->
    <button class="button" style="margin-top: 30px" onclick="requestPayment()">결제하기</button>
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
