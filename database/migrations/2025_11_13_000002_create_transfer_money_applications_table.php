<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('transfer_money_applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('app_type');
            $table->string('contract_number')->nullable();
            $table->string('vat_type')->nullable();
            $table->boolean('contract_stop')->default(false);
            $table->decimal('sum_with_vat', 14, 2)->nullable();
            $table->decimal('vat_sum', 14, 2)->nullable();
            $table->string('signer')->nullable();
            $table->string('bank_bik')->nullable();
            $table->string('bank_account')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_corr_account')->nullable();
            $table->string('status')->default('Черновик');
            $table->json('meta')->nullable();
            $table->timestamps();

            $table->index(['user_id', 'created_at']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('transfer_money_applications');
    }
};

