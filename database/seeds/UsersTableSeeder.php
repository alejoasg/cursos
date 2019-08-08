<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           User::create([
               'name'=> 'Aramis',
               'email'=>'aramis.asg@gmail.com',
               'password'=>bcrypt('aramis123'),
               'role'=> 0
           ]);
        User::create([
            'name'=> 'Clavel',
            'email'=>'clavel@gmail.com',
            'password'=>bcrypt('clavel123'),
            'role'=> 1
        ]);
        User::create([
            'name'=> 'Ana',
            'email'=>'ana@gmail.com',
            'password'=>bcrypt('ana123'),
            'role'=> 2
        ]);
    }
}
