<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeCabConstraint extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('paduan_suara', function (Blueprint $table) {
            $table->dropForeign(['id_cab']);

            $table->foreign('id_cab')->references('id')->on('cab')->onDelete('cascade');
        });

        Schema::table('riwayat_organisasi', function (Blueprint $table) {
            $table->dropForeign(['id_cab']);
            $table->foreign('id_cab')->references('id')->on('cab')->onDelete('cascade');
        });

        Schema::table('prestasi_kesenian_cab', function (Blueprint $table) {
            $table->dropForeign(['id_cab']);
            $table->foreign('id_cab')->references('id')->on('cab')->onDelete('cascade');
        });

        Schema::table('prestasi_nonkesenian_cab', function (Blueprint $table) {
            $table->dropForeign(['id_cab']);
            $table->foreign('id_cab')->references('id')->on('cab')->onDelete('cascade');
        });
        
        Schema::table('kemampuan_bermusik', function (Blueprint $table) {
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
        //
    }
}
