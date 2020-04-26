<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AnotherUpdateAttributeToCab extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cab', function (Blueprint $table) {
            $table->string('batch')->after('keahlian_lain');
            $table->enum('status_cab',['kandidat','waiting_list','0'])->after('instagram')->default('0');
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
            $table->dropColumn('batch');
            $table->dropColumn('status');
        });
    }
}
