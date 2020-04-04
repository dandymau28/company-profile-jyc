<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusPembayaranToKodePembayaranCab extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kode_pembayaran_cab', function (Blueprint $table) {
            $table->enum('status',['not_paid','wait_conf','paid'])->after('foto_bukti');
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
            $table->dropColumn('status');
        });
    }
}
