<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
			$table->increments('id');
			$table->text('comment')->nullable();
			$table->integer('rate',5)->autoIncrement(false);
			$table->integer('hotelid',5)->autoIncrement(false);
			$table->integer('userid',5)->autoIncrement(false);
			$table->string('ip',255);
			$table->string('status',1);
			$table->timestamp('created_at');
			$table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
