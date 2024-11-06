<?php

namespace Database\Seeders;

use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::select()->delete();
        $user = ['name'=>'Mohammad Asaad','email'=>'tester@mail.com','password'=>Hash::make('password')];
        \App\Models\User::create($user);
        \App\Models\User::factory(9)->create();
    }
}
