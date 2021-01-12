<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTedavisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tedavis', function (Blueprint $table) {
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
        Schema::dropIfExists('tedavis');
    }
}
