<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('movie_name');
            $table->integer('category_id');
            $table->integer('show_status');
            $table->string('country_name');
            $table->text('year');
            $table->text('duration');
            $table->text('director');
            $table->text('actor');
            $table->text('movie_image');
            $table->text('trailer_link');
            $table->integer('movie_hall_id');
            $table->text('publication_status');
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
        Schema::dropIfExists('movies');
    }
}
