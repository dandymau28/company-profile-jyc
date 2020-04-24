<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNikAttributeToCab extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cab', function (Blueprint $table) {
            $table->string('nik');
            $table->string('no_passport');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cab', function (Blueprint $table) {
            $table->dropColumn('nik');
            $table->dropColumn('no_passport');
        });
    }
}
