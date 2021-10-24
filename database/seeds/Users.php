<?php

use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'id'=>1,
            'name'=>'admin',
            'email'=>'admin@website.com',
            'email_verified_at'=> date("Y-m-d h:i:s"),
            'password'=>bcrypt('12345678'),
            'role'=>'admin',
        ]);
        \App\Models\User::create([
            'id'=>2,
            'name'=>'admin2',
            'email'=>'admin2@website.com',
            'email_verified_at'=> date("Y-m-d h:i:s"),
            'password'=>bcrypt('12345678'),
            'role'=>'admin',
        ]);
    }
}
