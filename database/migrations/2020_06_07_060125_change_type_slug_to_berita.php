<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeTypeSlugToBerita extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('berita', function (Blueprint $table) {
        //     $table->text('slug')->change();
        // });

        DB::statement("ALTER TABLE berita CHANGE slug slug text");
        // DB::statement('ALTER TABLE berita CHANGE slug url VARCHAR(200)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('berita', function (Blueprint $table) {
        //     //
        // });

        // DB::statement('ALTER TABLE berita CHANGE url slug TEXT');
        DB::statement("ALTER TABLE berita CHANGE slug slug varchar(200)");
    }
}
