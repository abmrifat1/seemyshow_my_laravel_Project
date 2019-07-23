<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('match_name');
            $table->string('category_name');
            $table->text('match_status');
            $table->string('stadium_name');
            $table->text('team');
            $table->text('date');
            $table->text('time');
            $table->integer('ticket');
            $table->text('ticket_status');
            $table->text('sponsor');
            $table->text('description');
            $table->text('match_image');
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
        Schema::dropIfExists('matches');
    }
}
