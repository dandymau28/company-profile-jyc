<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\beritaModel as Berita;
use Faker\Generator as Faker;

$factory->define(Berita::class, function (Faker $faker) {
    return [
        'judul' => $faker->text,
        'kategori' => $faker->text,
        'status' => 'terbit',
        'tgl_publish' => now(),
        'id_user' => '1',
        'isi_berita' => $faker->paragraph,
        'slug' => $faker->slug,
        'banner' => 'public/assets/img/484-1585298872.png',
        'tag' => $faker->text
    ];
});
