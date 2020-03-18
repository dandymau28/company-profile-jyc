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
            $table->unsignedBigInteger('id_audisi');
            $table->string('nama_lengkap');
            $table->string('nama_panggilan');
            $table->string('email');
            $table->string('instagram');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->string('pekerjaan');
            $table->string('institusi');
            $table->string('agama');
            $table->string('info_jyc');
            $table->text('tentang_jyc');
            $table->text('motivasi');
            $table->string('keahlian_lain')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->softDeletes();
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
