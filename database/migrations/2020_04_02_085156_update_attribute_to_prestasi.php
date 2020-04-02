<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateAttributeToPrestasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('prestasi', function (Blueprint $table) {
            $table->dropColumn('lokasi');
            $table->renameColumn('gelar_juara','kota');
            $table->string('negara')->after('gelar_juara');
            $table->renameColumn('tanggal_kompetisi','tgl_mulai');
            $table->date('tgl_selesai')->after('tanggal_kompetisi');
            $table->string('logo_kompetisi')->nullable();
            $table->string('foto_tim')->nullable();
            $table->string('foto_piala')->nullable();
            $table->mediumText('nama_kompetisi')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('prestasi', function (Blueprint $table) {
            $table->renameColumn('kota','gelar_juara');
            $table->dropColumn('negara');
            $table->dropColumn('tgl_selesai');
            $table->renameColumn('tgl_mulai','tanggal_kompetisi');
            $table->dropColumn('logo_kompetisi');
            $table->dropColumn('foto_tim');
            $table->dropColumn('foto_piala');
            $table->string('lokasi');
        });
    }
}
