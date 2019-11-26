<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProducts extends Migration
{
    public function up()
    {
        Schema::create('invoicesProducts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100);
            $table->timestampsTz();
        });
    }
    public function down()
    {
        Schema::dropIfExists('invoicesProducts');
    }
}

