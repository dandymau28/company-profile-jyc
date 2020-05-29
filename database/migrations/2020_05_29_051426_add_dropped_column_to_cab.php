<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDroppedColumnToCab extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cab', function (Blueprint $table) {
            $table->string('instagram', 255)->unique()->nullable()->after('email');
            $table->string('no_passport')->nullable()->after('email');
            $table->string('agama')->nullable()->after('email');
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
