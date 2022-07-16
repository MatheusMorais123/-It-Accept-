<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer', function (Blueprint $table) {
            $table->id();
            $table->string('product');
            $table->string('qtd');
            $table->string('address_start');
            $table->string('address_end');
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('employee_id');
            $table->timestamps();
            $table->foreign('employee_id')->references('id')->on('employee');
            $table->foreign('company_id')->references('id')->on('company');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offer');
    }
}
