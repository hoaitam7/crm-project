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
        Schema::create('sell_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')
                ->nullable()
                ->constrained('products')
                ->cascadeOnUpdate();
            $table->foreignId('sell_id')
                ->nullable()
                ->constrained('sells')
                ->cascadeOnUpdate();
            $table->date('sell_day')->nullable();           // ngày bán cụ thể của sản phẩm này

            $table->string('fullname_customer')->nullable(); // tên khách hàng (nếu khác với thông tin ở sells)

            $table->integer('number_sell')->nullable();     // số lượng bán ra

            $table->integer('price_sell')->nullable();      // giá bán đơn vị

            $table->integer('revenue')->nullable();         // doanh thu = number_sell * price_sell

            $table->foreignId('atm_id')
                ->nullable()
                ->constrained('atms')                       // giả sử bảng atms là bảng ATM / tài khoản ngân hàng
                ->cascadeOnUpdate();
            $table->unsignedTinyInteger('bagging')
                ->default(0)
                ->comment('0: chưa đóng bao, 1: đã đóng bao');

            $table->integer('number_bagging')->nullable();  // số lượng bao đã đóng (nếu áp dụng)

            $table->string('transport')->nullable();        // phương tiện vận chuyển / hãng vận chuyển

            $table->text('note')->nullable();               // ghi chú chi tiết cho sản phẩm bán này
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sell_products');
    }
};
