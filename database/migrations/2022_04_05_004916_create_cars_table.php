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
