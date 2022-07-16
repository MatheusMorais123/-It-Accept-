<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWinnerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('winner', function (Blueprint $table) {
            $table->id();
            $table->string('winner');
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('lance_id');
            $table->timestamps();
            $table->foreign('company_id')->references('id')->on('company');
            $table->foreign('lance_id')->references('id')->on('lance');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('winner');
    }
}
