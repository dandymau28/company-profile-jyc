<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeTglPublishAttributeToBerita extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('berita', function (Blueprint $table) {
            $table->dropColumn('tgl_publish');
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
            $table->timestamp('tgl_publish')->after('penting');
        });
    }
}
