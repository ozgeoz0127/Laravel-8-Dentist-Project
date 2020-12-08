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
			$table->text('description')->nullable();
			$table->string('image')->nullable();
			$table->string('categoryid')->nullable();
			$table->text('detail')->nullable();
			$table->text('price')->nullable();
			$table->integer('userid')->autoIncrement(false);
			$table->string('status',1);
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
