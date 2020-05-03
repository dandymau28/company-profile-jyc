<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePendaftarAttributeToJadwalAudisi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jadwal_audisi', function (Blueprint $table) {
            $table->integer('jumlah_pendaftar')->default('0')->nullable()->change();
            $table->string('batch')->after('id')->nullable();
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
            $table->dropColumn('batch');
        });
    }
}
