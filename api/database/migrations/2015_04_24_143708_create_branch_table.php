<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBranchTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('branch', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->integer('company_id');
			$table->integer('user_id');
			$table->integer('time_create');
			$table->integer('time_update');
			$table->integer('deleted')->default(0);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('branch');
	}

}