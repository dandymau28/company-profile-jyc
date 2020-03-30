<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTglPublishToBerita extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('berita', function (Blueprint $table) {
            $table->datetime('tgl_publish')->nullable()->after('penting');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('berita', function (Blueprint $table) {
            $table->dropColumn('tgl_publish');
        });
    }
}
