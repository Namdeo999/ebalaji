<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupon_prices', function (Blueprint $table) {
            $table->id();
            $table->integer('partner_id')->default(0);
            $table->integer('role_id')->default(0);
            $table->integer('coupon_type')->default(0);
            $table->float('coupon_price')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupon_prices');
    }
}
