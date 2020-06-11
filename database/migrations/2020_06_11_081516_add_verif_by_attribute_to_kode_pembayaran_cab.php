<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVerifByAttributeToKodePembayaranCab extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kode_pembayaran_cab', function (Blueprint $table) {
            $table->unsignedBigInteger('verified_by')->after('status')->nullable();

            $table->foreign('verified_by')->references('id')->on('users');
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
            $table->dropForeign('kode_pembayaran_cab_verified_by_foreign');
        });
    }
}
