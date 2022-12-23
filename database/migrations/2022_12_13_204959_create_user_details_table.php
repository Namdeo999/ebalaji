<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->default(0);
            $table->string('unique_id')->nullable();
            $table->integer('role_id')->default(0);
            $table->string('name')->nullable();
            $table->string('pan')->nullable();
            $table->integer('country_id')->default(0);
            $table->integer('state_id')->default(0);
            $table->integer('city_id')->default(0);
            $table->integer('pincode')->default(0);
            $table->integer('join_amount')->default(0);
            $table->string('domain')->nullable();
            $table->string('aadhar_front')->nullable();
            $table->string('aadhar_back')->nullable();
            $table->string('pan_front')->nullable();
            $table->string('pan_back')->nullable();
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
        Schema::dropIfExists('user_details');
    }
}
