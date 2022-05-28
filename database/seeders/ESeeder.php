<?php

namespace Database\Seeders;

use App\Models\Emisija;
use Illuminate\Database\Seeder;

class ESeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Emisija::factory()->count(40)->create();
    }
}
