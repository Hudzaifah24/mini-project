<?php

namespace Database\Seeders;

use App\Models\User as ModelsUser;
use Illuminate\Database\Seeder;
// use User\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsUser::create([
            'name' => 'petra',
            'email' => 'petra@gmail.com',
            'password' => '1234',
            'image' => 'kosong'
        ]);
        ModelsUser::create([
            'name' => 'abduh',
            'email' => 'abduh@gmail.com',
            'password' => '1234',
            'image' => 'kosong'
        ]);
        ModelsUser::create([
            'name' => 'ramb',
            'email' => 'owalah@gmail.com',
            'password' => '1234',
            'image' => 'kosong'
        ]);
    }
}
