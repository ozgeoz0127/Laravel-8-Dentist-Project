<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
			$table->id();
			$table->text('review')->nullable();
			$table->string('subject',255)->nullable();
			$table->integer('rate',5)->autoIncrement(false);
			$table->integer('user_id',5)->autoIncrement(false)->nullable();
			$table->integer('tedavi_id',5)->autoIncrement(false)->nullable();
			$table->string('ip',255);
			$table->string('status')->default(0);
			$table->timestamp('created_at')->nullable();
			$table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
