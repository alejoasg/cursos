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
               'last_name'=> 'Sanchez',
               'nick'=> 'ale',
               'dni'=> 'Y12131414J',
               'phone_number'=> '6776223112',
               'email'=>'aramis.asg@gmail.com',
               'password'=>bcrypt('aramis123'),
               'role'=> 0
           ]);
        User::create([
            'name'=> 'Clavel',
            'last_name'=> 'mendes',
            'nick'=> 'clavel',
            'dni'=> 'Y1264564J',
            'phone_number'=> '6717023112',
            'email'=>'clavel@gmail.com',
            'password'=>bcrypt('clavel123'),
            'role'=> 1
        ]);
        User::create([
            'name'=> 'Ana',
            'last_name'=> 'peres',
            'nick'=> 'ana',
            'dni'=> 'Y1213235236J',
            'phone_number'=> '6773463112',
            'email'=>'ana@gmail.com',
            'password'=>bcrypt('ana123'),
            'role'=> 2
        ]);
    }
}
