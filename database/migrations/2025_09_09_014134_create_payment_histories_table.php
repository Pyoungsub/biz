<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payment_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('payment_id')->constrained()->onDelete('cascade');
            $table->string('m_id');
            $table->string('last_transaction_key');
            $table->string('payment_key');
            $table->string('requested_at');
            $table->string('approved_at');
            $table->string('number');
            $table->string('approve_no');
            $table->string('card_type');
            $table->string('owner_type');
            $table->string('country');
            $table->float('balance_amount');
            $table->float('supplied_amount');
            $table->float('vat');
            $table->string('method');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_histories');
    }
};
