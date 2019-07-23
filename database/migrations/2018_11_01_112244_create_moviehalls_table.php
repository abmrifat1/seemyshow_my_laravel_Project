<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviehallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moviehalls', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hall_name');
            $table->text('hall_address');
            $table->integer('hall_phone');
            $table->text('hall_website');
            $table->text('hall_image');
            $table->tinyInteger('publication_status');
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
        Schema::dropIfExists('moviehalls');
    }
}
