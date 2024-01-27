<?php

namespace Database\Seeders;

use App\Models\Users;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Users::create([
            "name" => "kesavan",
            "email" => "kesavankani635@gmail.com",
            "phone_number" => "9629163650",
            "user_type" => "1"
        ]);
    }
}
