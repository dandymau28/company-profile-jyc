<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeAttributeToKodePembayaranCab extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kode_pembayaran_cab', function (Blueprint $table) {
            $table->dropForeign(['id_cab']);
            $table->foreign('id_cab')->references('id')->on('cab')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kode_pembayaran_cab', function (Blueprint $table) {
            //
        });
    }
}
