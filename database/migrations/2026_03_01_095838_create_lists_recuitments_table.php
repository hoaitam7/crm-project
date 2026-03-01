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
        Schema::create('lists_recuitments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('recuitment_id')->contrained('recuitments')->cascadeOnUpdate()->nullable();
            $table->dateTime('day');
            $table->date('birthday')->nullable();
            $table->string('phone')->nullable();
            $table->string('name')->nullable();
            $table->unsignedTinyInteger('interview')->default(0)->comment('0:ko , 1:có');
            $table->foreignId('user_id')->contrained('users')->cascadeOnUpdate()->nullable();
            $table->unsignedTinyInteger('result')->default(0)->comment('0:ko đạt , 1:đạt');
            $table->dateTime('day_word')->nullable();
            $table->text('note')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lists_recuitments');
    }
};
