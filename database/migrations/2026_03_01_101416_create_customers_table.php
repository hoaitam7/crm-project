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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('fullname')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();

            $table->unsignedTinyInteger('source')
                ->default(0)
                ->comment('0: hết hàng, 1: còn hàng')
                ->nullable();

            $table->string('product_sale')->nullable();

            $table->unsignedTinyInteger('scale')
                ->default(0)
                ->comment('0: nhỏ, 1: vừa, 2: lớn')
                ->nullable();

            $table->foreignId('care_customer_id')
                ->nullable()
                ->constrained('care_customers')
                ->cascadeOnUpdate();


            $table->text('information')->nullable();

            $table->unsignedTinyInteger('potential')
                ->default(0)
                ->comment('0: thấp, 1: trung bình, 2: cao')
                ->nullable();

            $table->text('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
