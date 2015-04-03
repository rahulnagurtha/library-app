<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKeys extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('books',function(Blueprint $table)
        {
            $table->foreign('publication_id')->references('id')->on('publications');
            $table->foreign('issue')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('book_category');
        });

        Schema::table('book_ratings',function(Blueprint $table)
        {
            $table->foreign('book_id')->references('id')->on('books');
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('nao_details',function(Blueprint $table)
        {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('nao_id')->references('id')->on('new_add_options');
        });

        Schema::table('mutual_transfer',function(Blueprint $table)
        {
            $table->foreign('requester_id')->references('id')->on('users');
            $table->foreign('owner_id')->references('id')->on('users');
        });

        Schema::table('feedback',function(Blueprint $table)
        {
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('lost_book',function(Blueprint $table)
        {
            $table->foreign('book_id')->references('id')->on('books');
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('transactions',function(Blueprint $table)
        {
            $table->foreign('book_id')->references('id')->on('books');
            $table->foreign('user_id')->references('id')->on('users');
        });

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
