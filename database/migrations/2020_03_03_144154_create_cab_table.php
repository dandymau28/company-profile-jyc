<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCabTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cab', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_lengkap');
            $table->integer('umur');
            $table->enum('status_nikah',['sudah_nikah','belum_nikah','belum_terisi'])->default('belum_terisi');
            $table->string('pekerjaan');
            $table->char('no_hp',16);
            $table->enum('ambitus',['sopran_1','sopran_2','alto_1','alto_2','tenor_1','tenor_2','bass_1','bass_2','belum_ada'])
            ->default('belum_ada');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('kemampuan_musik')->nullable();
            $table->enum('tingkat_keahlian',['basic','intermediate','advanced','tidak_ada'])->default('tidak_ada');
            $table->string('keahlian_non_musik')->nullable();
            $table->string('domisili');
            $table->char('emergency_call',16);
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
        Schema::dropIfExists('cab');
    }
}
