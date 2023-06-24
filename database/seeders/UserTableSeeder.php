<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //KETIGA DATA INI AKAN DIJADIKAN DUMMY USER DENGAN MASING-MASING ROLE YANG DIMILIKINYA
       User::create([
        'name' => 'Arikun',
        'email' => 'arikun@gmail.com',
        'password' => bcrypt('secret'),
        'role' => 'admin'
    ]);
   
    User::create([
        'name' => 'user',
        'email' => 'user@gmail.com',
        'password' => bcrypt('secret'),
        'role' => 'user'
    ]);
    }
}
