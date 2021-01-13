<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRandevusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('randevus', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->autoIncrement(false);
			$table->integer('tedavi_id')->autoIncrement(false);
			$table->timestamp('date')->nullable();
			$table->time('time')->nullable();
			$table->integer('hekim_id')->autoIncrement(false);
			$table->string('ip',255)->nullable();
			$table->text('note')->nullable();
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
        Schema::dropIfExists('randevus');
    }
}