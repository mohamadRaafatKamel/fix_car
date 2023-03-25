<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStafTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staf', function (Blueprint $table) {
            $table->id();
            $table->string('hykl_no')->nullable();
            $table->string('el_gha');
            $table->string('benef_phone');
            $table->string('benef_id');
            $table->string('send_done');
            $table->string('recev_name');
            $table->string('recev_lvl');
            $table->string('recev_sign');
            $table->dateTime('recev_date');
            $table->string('sender_name');
            $table->string('sender_lvl');
            $table->string('sender_sign');
            $table->dateTime('sender_date');
            $table->string('acc_name');
            $table->string('acc_lvl');
            $table->string('acc_sign');
            $table->dateTime('acc_date');
            $table->string('back_day1');
            $table->dateTime('back_date1');
            $table->dateTime('time1');
            $table->string('admin_for_state1');

            $table->string('recev_name1');
            $table->string('recev_lvl1');
            $table->string('recev_sign1');
            $table->dateTime('recev_date1');
            $table->string('sender_name1');
            $table->string('sender_lvl1');
            $table->string('sender_sign1');
            $table->dateTime('sender_date1');
            $table->string('acc_name1');
            $table->string('acc_lvl1');
            $table->string('acc_sign1');
            $table->dateTime('acc_date1');

            $table->string('day');
            $table->dateTime('recev_time');

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
        Schema::dropIfExists('staf');
    }
}
