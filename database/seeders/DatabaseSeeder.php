<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Property;
use App\Models\Image;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        // \App\Models\User::factory(10)->create();
        Property::truncate();
        Image::truncate();

        \App\Models\Property::factory(200)->create();
        \App\Models\Image::factory(400)->create();
    }
}
