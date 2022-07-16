<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lance', function (Blueprint $table) {
            $table->id();
            $table->double('value');
            $table->unsignedBigInteger('transport_id');
            $table->timestamps();
            $table->foreign('transport_id')->references('id')->on('transport');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lance');
    }
}
