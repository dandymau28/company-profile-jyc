<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeAttributeToJadwalAudisi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jadwal_audisi', function (Blueprint $table) {
            $table->dropColumn('jam_mulai');
            $table->dropColumn('jam_selesai');
            $table->integer('kuota')->after('tanggal');
            $table->integer('jumlah_pendaftar');
            $table->string('link_grup');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jadwal_audisi', function (Blueprint $table) {
            $table->dropColumn('kuota');
            $table->dropColumn('jumlah_pendaftar');
            $table->dropColumn('link_grup');
            $table->time('jam_mulai');
            $table->time('jam_selesai');
        });
    }
}
