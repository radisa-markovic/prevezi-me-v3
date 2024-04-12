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
        $user = User::factory()->create([
            "name" => "Pera Peric",
            "email" => "pera@mail.com",
            "password" => "12345678"
        ]);

        Ride::factory()
            ->count(10)
            ->create(["user_id" => $user->id]);
    }
}
