<?php

namespace Database\Seeders;

use App\Models\Journee;
use App\Models\Promotion;
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
        // \App\Models\User::factory(10)->create();
        \App\Models\Promotion::factory(10)->create();
         $this->call(JourneeSeeder::class);
        //$this->call(PromotionSeeder::class);
        $this->call(UserSeeder::class);
    }
}
