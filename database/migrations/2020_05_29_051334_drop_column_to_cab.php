<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropColumnToCab extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cab', function (Blueprint $table) {
            $table->dropColumn('instagram');
            $table->dropColumn('no_passport');
            $table->dropColumn('agama');
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
            //
        });
    }
}
