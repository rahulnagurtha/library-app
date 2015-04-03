<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('users',function(Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->string('name');
            $table->bigInteger('roll');
            $table->string('webmail');
            $table->enum('type',['BTECH','MTECH','PHD','MSC','FAC']);
            $table->integer('no_books_issued');
            $table->integer('fine');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('books',function(Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('authors');
            $table->unsignedBigInteger('publication_id');
            $table->string('edition');
            $table->integer('code');
            $table->string('ISBN');
            $table->unsignedBigInteger('issue')->nullable();
            $table->integer('issue_no');
            $table->timestamp('issue_date');
            $table->timestamp('return_date');
            $table->string('queue1')->nullable();
            $table->string('queue2')->nullable();
            $table->string('queue3')->nullable();
            $table->string('queue4')->nullable();
            $table->string('queue5')->nullable();
            $table->boolean('lost');
            $table->integer('rat_5');
            $table->integer('rat_4');
            $table->integer('rat_3');
            $table->integer('rat_2');
            $table->integer('rat_1');
            $table->unsignedBigInteger('category_id');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('publications', function(Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('book_category', function(Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('book_ratings',function(Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('book_id');
            $table->unsignedBigInteger('user_id');
            $table->integer('rating');
            $table->string('review');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('admin',function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('username');
            $table->string('password');
            $table->string('email');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('new_add_options',function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title');
            $table->string('author');
            $table->string('publication');
            $table->string('edition');
            $table->integer('votes');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('nao_details',function(Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedInteger('nao_id');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('mutual_transfer',function(Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedBigInteger('requester_id');
            $table->unsignedBigInteger('owner_id');
            $table->enum('status',['REQUESTED','ACCEPTED','REJECTED','TRANSFERRED']);
            $table->string('key');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('feedback',function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('feedback');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('rules',function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('priority');
            $table->string('rule');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('lost_book', function(Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('book_id');
            $table->string('title');
            $table->string('authors');
            $table->string('publication');
            $table->string('edition');
            $table->integer('code');
            $table->string('ISBN');
            $table->unsignedBigInteger('user_id');
            $table->enum('status',['REQUESTED','UPDATED','ACCEPTED','REJECTED']);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('transactions', function(Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('book_id');
            $table->unsignedBigInteger('user_id');
            $table->enum('transaction_type',['ISSUE','REISSUE','MBT','FINE_PAID']);
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
