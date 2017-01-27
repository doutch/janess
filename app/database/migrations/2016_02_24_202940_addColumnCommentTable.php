<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class addColumnCommentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Creates the comments table
        Schema::table('comments', function ($table) {
        
            $table->string('photo')->default('unknow.png');
      
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		
    Schema::table('comments', function($table)
    {
       $table->dropColumn('photo');
    });
	}

}
