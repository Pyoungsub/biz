<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Plan;
class Payment extends Component
{
    public $id;
    public $order_name;
    public $order_id;
    public $amount;
    public function mount($id)
    {
        $plan = Plan::find($id);
        if (! $plan) {
            abort(404, 'Plan not found.');
        }
        $this->order_name = $plan->name.' ('.$plan->duration_months.' months)';
        $payment = auth()->user()
            ->payments()
            ->where('plan_id', $id)
            ->where('status', 'pending')
            ->first();
        if (! $payment) {
            $order_id = str_replace('-', '', Str::uuid()->toString()); // generate once, clean once
            $plan = Plan::find($id);
            $amount = $plan->duration_months * $plan->latestPrice->price;
            $payment = auth()->user()->payments()->create([
                'plan_id'  => $id,
                'status'   => 'pending',
                'order_id' => $order_id,
                'amount' => $amount
            ]);
        }
        $this->id = $id;
        $this->order_id = $payment->order_id; // already clean (no dashes)
        $this->amount = $payment->amount;
    }
    public function render()
    {
        return view('livewire.payment');
    }
}
