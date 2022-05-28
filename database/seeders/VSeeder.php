<?php

namespace Database\Seeders;

use App\Models\Voditelj;
use Illuminate\Database\Seeder;

class VSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Voditelj::factory()->count(60)->create();
    }
}
