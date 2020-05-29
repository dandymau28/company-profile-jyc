<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOpenStatusToInfoOprec extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('info_oprec', function (Blueprint $table) {
            $table->enum('status',['buka', 'tutup'])->after('batch')->default('tutup');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('info_oprec', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
