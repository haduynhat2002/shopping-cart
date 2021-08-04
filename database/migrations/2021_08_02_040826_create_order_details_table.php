<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->unsignedInteger('orderId'); // thuộc đơn hàng nào
            $table->foreign('orderId')->references('id')->on('orders');
            $table->unsignedInteger('productId');// mua cái gì
            $table->foreign('productId')->references('id')->on('products');
            $table->unsignedInteger('quantity'); //số lượng bao nhiêu
            $table->double('unitPrice'); // giá một sản phẩm là bao nhiêu?
            //trong một đơn hàng, sẽ không  có các sản phẩm với id trùng nhau
            //mà chỉ thay đổi số lượng thôi
            $table->primary(['orderId', 'productId']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_details');
    }

}
