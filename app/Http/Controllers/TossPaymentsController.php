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
        $payment = Payment::where('order_id',$request->orderId)->firstOrFail();
        $amount = $payment->amount;
        $received_amount = $request->amount;
        if($amount != $received_amount)
        {
            abort(422, 'Payment amount mismatch');
        }
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
        if(!$response->ok())
        {
            return redirect('/');
        }
        $update_payment_info = $payment->update(['status' => 'charged']);
        if($update_payment_info)
        {
            $create_payment_history = $payment->payment_history()->updateOrCreate(
                ['payment_id' => $payment->id],
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
                return redirect()->route('plans');
            }
        }
    }
    public function fail(Request $request)
    {
        return redirect()->route('payment');
    }
}
