<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wind_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pid');
            $table->string('parent');
            $table->string('author',50);
            $table->integer('authorID');
            $table->integer('ownerID');
            $table->text('text');
            $table->string('email',40);
            $table->string('url',40);
            $table->string('ip',40);
            $table->string('agent');
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
        Schema::drop('wind_comments');
    }
}
