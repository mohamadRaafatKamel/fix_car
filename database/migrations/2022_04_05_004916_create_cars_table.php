<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sanaf_id');
            $table->foreign('sanaf_id')->references('id')->on('asnaf')->onDelete('cascade');
           
            $table->string('car_type')->nullable();
            $table->string('car_model')->nullable();
            $table->string('color_in')->nullable();
            $table->string('color_out')->nullable();
            $table->string('hykl_no')->nullable();
            $table->string('car_no')->nullable();
            $table->string('car_category')->nullable();
            $table->string('eltazlel')->nullable();
            $table->string('eltasfe7')->nullable();
            $table->string('subsidiary')->nullable();
            $table->string('img')->nullable();

            // form field
            $table->string('f1_receiver_name')->nullable();
            $table->string('f1_receiver_phone')->nullable();
            $table->string('f1_receiver_id')->nullable();
            $table->string('f1_elgha')->nullable();
            $table->string('f1_item_name')->nullable();
            $table->string('f1_car_categ')->nullable();
            $table->string('f1_day1')->nullable();
            $table->dateTime('f1_date1')->nullable();
            $table->string('f1_time1')->nullable();
            $table->string('f1_day2')->nullable();
            $table->dateTime('f1_date2')->nullable();
            $table->string('f1_time2')->nullable();
            $table->string('f1_enter_day3')->nullable();
            $table->dateTime('f1_enter_date3')->nullable();
            $table->string('f1_enter_time3')->nullable();
            $table->string('f1_3gla')->nullable();
            $table->string('f1_3freta')->nullable();
            $table->string('f1_tfaya')->nullable();
            $table->string('f1_msls')->nullable();
            $table->string('f1_radio')->nullable();
            $table->string('f1_sefty')->nullable();
            $table->string('f1_mostatel')->nullable();
            $table->string('f1_tes')->nullable();
            $table->string('f1_4nth')->nullable();
            $table->string('f1_form_img')->nullable();
            $table->string('f1_remot')->nullable();
            $table->string('f1_front_back_lo7a')->nullable();
            $table->string('f1_front_back_d3am')->nullable();
            $table->string('f1_call_dev')->nullable();
            $table->string('f1_el3ward')->nullable();

            $table->unsignedBigInteger('admin_id');
            $table->foreign('admin_id')->references('id')->on('admin')->onDelete('cascade');
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('cars');
    }
}
