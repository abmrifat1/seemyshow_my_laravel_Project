<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShowCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('show_carts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ticket_id');
            $table->string('show_name');
            $table->string('show_place');
            $table->date('date');
            $table->time('time');
            $table->string('seat');
            $table->integer('price');
            $table->integer('quantity');
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
        Schema::dropIfExists('show_carts');
    }
}
