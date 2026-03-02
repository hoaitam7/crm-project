<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // name, password, rememberToken, email_verified_at
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->date('birthday');
            $table->unsignedTinyInteger('sex')->default(0)->comment('0: name, 1: nữ'); //0: name, 1: nữ
            $table->foreignId('part_id')->constrained('parts')->cascadeOnUpdate()->nullable();
            $table->foreignId('position_id')->constrained('positions')->cascadeOnUpdate()->nullable();
            $table->foreignId('team_id')->constrained('teams')->cascadeOnUpdate()->nullable();
            $table->foreignId('type_account_id')->constrained('type_accounts')->cascadeOnUpdate()->nullable();
            $table->unsignedTinyInteger('type_work')->default(0)->comment('0: fulltime, 1: partime');
            $table->unsignedTinyInteger('status')->default(0)->comment('0: đang làm, 1: đã nghỉ');
            $table->string('phone');
            $table->string('address');
            $table->dateTime('start_day');
            $table->dateTime('end_end');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
