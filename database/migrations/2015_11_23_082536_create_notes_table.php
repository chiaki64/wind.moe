<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wind_notes', function (Blueprint $table) {
            $table->increments('id');
            $table->text('text');
            $table->string('author',30);
            $table->string('tags',50);
            $table->timestamp('created_at');
            $table->string('published_at',30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('wind_notes');
    }
}
