<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id'); //mã đơn hàng
            $table->integer('customerId'); //ai mmua
            $table->string('totalPrice'); // mua tất cả bao nhiêu tiền           $table->double('totalPrice');
            $table->string('shipName'); // ship cho ai
            $table->string('shipPhone'); // số phone gọi khi cần là gì
            $table->string('shipAddress'); // về đâu
            $table->string('note'); // có lưu gì không
            $table->boolean('isCheckout');// thanh toán hay chưa
            $table->timestamps();
            //trạng thái có thể có nhiều tùy thuộc vào độ phức tạp của bài toán
            //1.deleted. dã xóa
            //2.Cancel. hủy
            //0. waiting. chờ phản hồi
            //1.Confirmed. đã xác nhận đơn hàng
            //2. Shipping. đã được vẫn chuyển
            //3. Done . đã xử lý xong
            $table->integer('status'); // trạng thái là gì?: waiting , shipping, done
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
