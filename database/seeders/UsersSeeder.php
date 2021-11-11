<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            "name" => "Jozsi",
            "email" => "test@gmail.com",
            "email_verified_at" => now(),
            "password" => "$2y$10\$Qs.tj3RpxYzTzBjgm8LaMO4DUClMv9ehRna.pN4z1NBDG/TzhzJha",
            "remember_token" => NULL,
            "created_at" => now(),
            "updated_at" => now(),
            "ip_address" => "192.168.0.12",
        ];

        $random_users = User::factory()
            ->count(9)
            ->create();
        DB::table('users')->insert($users);
    }
}
