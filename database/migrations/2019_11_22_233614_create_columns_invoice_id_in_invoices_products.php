<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColumnsInvoiceIdInInvoicesProducts extends Migration
{
    public function up()
    {
        Schema::table('invoices_products', function (Blueprint $table) {
            $table->unsignedBigInteger('invoice_id')->after('id');
            $table->foreign('invoice_id')
                ->references('id')->on('invoices')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::table('invoices_products', function (Blueprint $table) {
            $table->dropForeign('invoices_products_invoice_id_foreign');
        });
    }
}