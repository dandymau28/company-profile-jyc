<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusAttributeToKompetisi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kompetisi', function (Blueprint $table) {
            $table->enum('status',['selesai','belum_selesai'])
                ->default('belum_selesai')
                ->after('lokasi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kompetisi', function (Blueprint $table) {
            //
        });
    }
}
