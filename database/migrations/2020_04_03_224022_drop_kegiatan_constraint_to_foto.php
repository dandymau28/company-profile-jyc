<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropKegiatanConstraintToFoto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('foto', function (Blueprint $table) {
            $table->unsignedBigInteger('id_kegiatan')->after('id');

            $table->foreign('id_kegiatan')->references('id')->on('kegiatan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('foto', function (Blueprint $table) {
            $table->dropForeign(['id_kegiatan']);
        });
    }
}
