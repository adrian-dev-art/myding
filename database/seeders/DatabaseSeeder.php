<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // User::create([
        //     'name' => "Adrian",
        //     'role_id' => 2,
        //     'username' => $this->faker->firstName(),
        //     // 'profile_picture' => 'profile-pic-me.png',
        //     'school' => 'SMKN 1 SUMEDANG',
        //     'organization' => 'PP',
        //     'company' => "Vence",
        //     'phone_number' => "0881023880565",
        //     'email' => "adrnmgfr@gmail.com",
        //     'email_verified_at' => now(),
        //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        //     'remember_token' => Str::random(10),
        // ]);
        DB::table('users')->insert([
            'name' => "user",
            'role_id' => 1,
            'username' => "user",
            // 'profile_picture' => 'profile-pic-me.png',
            'school' => 'SMKN 1 SUMEDANG',
            'organization' => 'PP',
            'company' => "Vence",
            'phone_number' => "088123880565",
            'email' => "user@gmail.com",
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        
        DB::table('users')->insert([
            'name' => "poster",
            'role_id' => 2,
            'username' => "poster",
            // 'profile_picture' => 'profile-pic-me.png',
            'school' => 'SMKN 1 SUMEDANG',
            'organization' => 'PP',
            'company' => "Vence",
            'phone_number' => "0881023880565",
            'email' => "poster@gmail.com",
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);


        DB::table('users')->insert([
            'name' => "admin",
            'role_id' => 3,
            'username' => "admin",
            // 'profile_picture' => 'profile-pic-me.png',
            'school' => 'SMKN 1 SUMEDANG',
            'organization' => 'PP',
            'company' => "Vence",
            'phone_number' => "08812380565",
            'email' => "admin@gmail.com",
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        

        DB::table('roles')->insert([
            'name' => 'user',
        ]);
        DB::table('roles')->insert([
            'name' => 'poster',
        ]);
        DB::table('roles')->insert([
            'name' => 'admin',
        ]);

        \App\Models\User::factory(20)->create();
        \App\Models\Post::factory(20)->create();
        \App\Models\Comment::factory(20)->create();
        \App\Models\Category::factory(20)->create();
    }
}
