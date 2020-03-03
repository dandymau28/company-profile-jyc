<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeritaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berita', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('judul');
            $table->enum('kategori',['terbit','belum_terbit']);
            $table->enum('status',['selesai','belum_selesai']);
            $table->timestamp('tgl_publish');
            $table->bigInteger('id_user')->references('id')->on('users');
            $table->text('isi_berita');
            $table->string('banner')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('berita');
    }
}
