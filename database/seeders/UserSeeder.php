<?php

namespace Database\Seeders;

use App\Models\Promotion;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

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
            $user->journees()->attach($journee->id);
        });

        User::create([
            'name' => 'admin',
            'lastname' => 'admin',
            'pseudo' => 'admin',
            'email' => 'admin@admin.fr',
            'password' => '$2y$10$NvP8.zszKNBGixe3u7jdJ.1bdTfGC8ANpL6GZRPNbJfliMKglZ4/q',
            'remember_token' => Str::random(10),
            'isAdmin' => 1,
            'promotion_id' => 1
        ]);

        User::create([
            'name' => 'eleve',
            'lastname' => 'eleve',
            'pseudo' => 'eleve',
            'email' => 'eleve@eleve.fr',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => Str::random(10),
            'isAdmin' => 0,
            'promotion_id' => 1
        ]);
    }
}
