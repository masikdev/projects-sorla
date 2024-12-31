<?php

namespace Database\Seeders;

use App\Models\User;
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
        $data = [
            [
                'name' => 'Owner',
                'email' => 'owner@sorla.com',
                'password' => bcrypt('owner12345'),
            ]
        ];
        foreach ($data as $key => $value) {
            User::create($value);
        }
    }
}
