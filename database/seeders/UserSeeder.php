<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    protected $users = [
        [
            'name' => 'cashier',
            'email' => 'cashier@mail.com',
            'password' => '12345678'
        ]
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert($this->users);
    }
}
