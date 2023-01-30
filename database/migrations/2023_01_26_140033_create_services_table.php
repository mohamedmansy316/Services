<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('ar_lang_name');
            $table->string('ar_title');
            $table->text('ar_description');
            $table->string('lang_code');
            $table->string('lang_name');
            $table->string('title');
            $table->text('description');
            $table->text('link');
            $table->string('icon');
            $table->integer('order')->default(9999);
            $table->string('section');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
