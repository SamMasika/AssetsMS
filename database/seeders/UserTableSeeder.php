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
        $adminRecords=[[
            'id'=>'1','name'=>'Samwel','email'=>'admin@gmail.com','password'=>'$2a$12$FXmpccnsF8coowwQlHdOZOnPDKDyCmXlk.ksiRBxdFKUVTBv68gYC',
            'lname'=>'Masika','phone'=>'0714439960'],
           [ 'id'=>'2','name'=>'James','email'=>'james@gmail.com','password'=>'$2a$12$BnjZMmXEFdU4A6W3hjmblueRbj1uC.KfEgZ/6nCzSbN9m6gYNerNi',
            'lname'=>'Mlingo','phone'=>'0754435660',
        ]];


        User::insert($adminRecords);
        
    }
}
