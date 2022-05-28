<?php

namespace Database\Seeders;

use App\Models\Televizija;
use Illuminate\Database\Seeder;

class TSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Televizija::factory()->count(20)->create();
    }
}
