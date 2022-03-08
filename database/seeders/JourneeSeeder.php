<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Journee;

class JourneeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Journee::factory(5)->create();
    }
}
