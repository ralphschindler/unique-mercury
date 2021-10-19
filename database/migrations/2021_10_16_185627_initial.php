<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Initial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->string('id', 26)->primary();
            $table->string('name');
            $table->string('description');
            $table->json('types')->nullable();
            $table->json('urls')->nullable();
            $table->timestamps();
        });
    }

}
