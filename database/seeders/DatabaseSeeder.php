<?php

namespace Database\Seeders;

use App\Models\Beach;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
{
    // call my beach seeder via  php artisan db:seed
    $this->call([
        BeachesSeeder::class,
    ]);

    $users = User::factory(100)->create();

    $beaches = Beach::factory(200)->create();


    // loop through each user, pick a random number of beaches, 'pluck' the id of those beaches and attach it to the favourites table
    foreach ($users as $user) {
        $randomBeaches = $beaches->random(rand(1, 3))->pluck('id');
        // link user to those random ids in randomBeaches
        $user->favouriteBeaches()->attach($randomBeaches);
    }
}

}
