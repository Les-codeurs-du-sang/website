<?php

namespace Database\Seeders;

use App\Models\Promotion;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Promotion::all()->each(function ($promotion) {
            User::factory(5)->create(['promotion_id' => $promotion->id]);
        });

        User::all()->each(function ($user) {
            $journee = \App\Models\Journee::inRandomOrder()->first();
            $user->journees()->attach($journee->id, ['heure_reservation' => now()]);
        });
    }
}
