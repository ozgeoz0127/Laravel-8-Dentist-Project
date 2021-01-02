<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTedaviTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tedavi', function (Blueprint $table) {
			$table->increments('id');
			$table->string('title',255)->nullable();
			$table->string('keywords',255)->nullable();
			$table->text('description',255)->nullable();
			$table->string('image',255)->nullable();
			$table->string('categoryid',10)->nullable();
			$table->text('detail')->nullable();
			$table->integer('userid')->autoIncrement(false)->nullable();
			$table->string('status',1);
			$table->string('url',255);
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
        Schema::dropIfExists('tedavi');
    }
}
