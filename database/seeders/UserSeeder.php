<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'nimNip' => '12345',
                'username' => 'admin',
                'No_WhatsApp'=>'082346265909',
                'role'=>'1',
                'password' => bcrypt('123'),
                'profile' => '/uploads/profile/nadiya.jpg',
                'status' => 'inactive',
            ],
            [
                'nimNip' => '09031022425003',
                'username' => 'DIDIN',
                'No_WhatsApp'=>'080808',
                'role'=>'2',
                'password' => bcrypt('didin'),
                'profile' => '/uploads/profile/nadiya.jpg',
                'status' => 'inactive',
            ],

           
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
