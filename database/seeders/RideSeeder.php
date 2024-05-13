<?php

namespace Database\Seeders;

use App\Models\Ride;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userOne = User::factory()->create([
            "email" => "email@email.com",
            "name" => "Ime Prezime",
            "password" => "12345678"
        ]);

        $userTwo = User::factory()->create([
            "email" => "pera@mail.com",
            "name" => "Pera Peric",
            "password" => "12345678"
        ]);

        Ride::factory()
            ->count(5)
            ->hasAttached($userOne)
            ->create();

        Ride::factory()
            ->count(5)
            ->hasAttached($userTwo)
            ->create();
    }
}
