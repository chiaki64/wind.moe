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
            $table->increments('cid');
            $table->integer('pid');
            $table->integer('parent');
            $table->string('author');
            $table->integer('authorId');
            $table->integer('ownerId');
            $table->text('text');
            $table->string('mail');
            $table->string('url');
            $table->string('ip');
            $table->string('agent');
            $table->timestamp('created');
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
