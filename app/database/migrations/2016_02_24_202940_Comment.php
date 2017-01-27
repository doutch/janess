<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Comment extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Creates the comments table
        Schema::create('comments', function ($table) {
            $table->increments('id');
            $table->string('pseudo')->unique();
            $table->string('email', 255);
            $table->string('text');
            $table->string('photo')->defaut('unknow.png');
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
		Schema::drop('comments');
	}

}
