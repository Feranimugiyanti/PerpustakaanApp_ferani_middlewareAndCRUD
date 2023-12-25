<?php

namespace Database\Seeders;

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
        user::create([
            'name'=>'admin',
            'email'=> 'admin@gmail.com',
            'password'=> bcrypt('1123123123'),
            'email_veryfied_at'=> now()
        ])->assignRole('admin');
           
        user::create([
            'name'=>'petugas',
            'email'=> 'petugas@gmail.com',
            'password'=> bcrypt('1123123123'),
            'email_veryfied_at'=> now()
        ])->assignRole('petugas');

        user::create([
            'name'=>'peminjam',
            'email'=> 'peminjam@gmail.com',
            'password'=> bcrypt('1123123123'),
            'email_veryfied_at'=> now()
        ])->assignRole('peminjam');
       
    }
}
