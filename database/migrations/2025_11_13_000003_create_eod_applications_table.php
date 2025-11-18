<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('eod_applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('claim_type');
            $table->string('contract_number')->nullable();
            $table->string('operator_name')->nullable();
            $table->string('contact_fio')->nullable();
            $table->string('contact_tel')->nullable();
            $table->string('submission_method')->nullable();
            $table->string('status')->default('Черновик');
            $table->json('meta')->nullable();
            $table->timestamps();

            $table->index(['user_id', 'created_at']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('eod_applications');
    }
};

