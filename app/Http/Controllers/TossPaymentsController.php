<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redis;

use App\Models\Payment;

class TossPaymentsController extends Controller
{
    //
    public function success(Request $request)
    {
        $order = Payment::where('order_id',$request->orderId);




        //from here!!
        
        if($order)
        {
            $amount = $order->sum_of_pending_orders();
            $authorization = 'Basic '.base64_encode(env('TOSS_SECRET_KEY').':');
            $response = Http::withHeaders([
                'Authorization' => $authorization,
                'Content-Type' => 'application/json',
                //'Idempotency-Key' => $request->orderId,
            ])->post(env('TOSS_PAYMENT_URL').'confirm', [
                'paymentKey' => $request->paymentKey,
                'amount' => $amount,
                'orderId' => $request->orderId,
            ]);
            if($response->ok())
            {
                $update_order_info = $order->update(['order_status' => 'charged']);
                if($update_order_info)
                {
                    $create_payment_history = $order->payment_history()->updateOrCreate(
                        ['order_id' => $order->id],
                        [
                            'm_id' => $response->json('mId'),
                            'last_transaction_key' => $response->json('lastTransactionKey'),
                            'payment_key' => $response->json('paymentKey'),
                            'requested_at' => $response->json('requestedAt'),
                            'approved_at' => $response->json('approvedAt'),
                            'number' => $response->json('card.number'),
                            'approve_no' => $response->json('card.approveNo'),
                            'card_type' => $response->json('card.cardType'),
                            'owner_type' => $response->json('card.ownerType'),
                            'country' => $response->json('country'),
                            'balance_amount' => $response->json('balanceAmount'),
                            'supplied_amount' => $response->json('suppliedAmount'),
                            'vat' => $response->json('vat'),
                            'method' => $response->json('method'),
                        ]
                    );
                    if($create_payment_history)
                    {
                        //foreach로 바꾸고 redis value 추가 해야 함
                        foreach($order->orders as $order)
                        {
                            Redis::incr('product:'.$order->product->id.':booked');
                            $order->update(['order_status' => 'charged']);
                        }
                        return redirect()->route('bookings');
                    }
                }
            }
            else
            {
                return redirect()->route('bookings');
            }
        }
        else{
            return redirect()->route('main');
        }
    }
    public function fail(Request $request)
    {
        return redirect()->route('payment');
    }
}
