<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropForeignToFoto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('foto', function (Blueprint $table) {
            $table->dropForeign(['id_kegiatan']);
            $table->string('kategori')->after('alamat_foto');
            $table->text('deskripsi')->after('alamat_foto')->nullable();
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
            $table->unsignedBigIncrement('id_kegiatan');
            $table->dropColumn('kategori');
            $table->dropColumn('deskripsi');
        });
    }
}
