<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
			$table->increments('id');
			$table->string('title',255)->nullable();
			$table->string('keywords',255)->nullable();
			$table->text('description')->nullable();
			$table->string('company',255)->nullable();
			$table->text('address')->nullable();
			$table->string('phone',255)->nullable();
			$table->string('fax',255)->nullable();
			$table->string('email',255)->nullable();
			$table->string('smtpserver',255)->nullable();
			$table->string('smtpemail',255)->nullable();
			$table->string('smtppassword',255)->nullable();
			$table->string('smtpport',255)->nullable();
			$table->string('facebook',255)->nullable();
			$table->string('instagram',255)->nullable();
			$table->string('twitter',255)->nullable();
			$table->text('aboutus')->nullable();
			$table->text('contact')->nullable();
			$table->text('references')->nullable();
			$table->string('status',1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
