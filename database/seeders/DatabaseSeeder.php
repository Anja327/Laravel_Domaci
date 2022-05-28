<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $ts = new TSeeder();
        $ts->run();
        $vs = new VSeeder();
        $vs->run();
        $es = new ESeeder();
        $es->run();
    }
}
