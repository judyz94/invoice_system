<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCustomers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('name', 150);
            $table->string('last_name', 150);
            $table->enum('status', ['New','Sent','Overdue','Paid','Cancelled']);
            $table->enum('document_type', ['CC', 'TI', 'CE', 'RC', 'NIT', 'RUT']);
            $table->bigInteger('document')->unique();
            $table->string('email', 40)->unique();
            $table->string('phone')->nullable();
            $table->string('address', 40)->nullable();
            $table->timestampsTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}

