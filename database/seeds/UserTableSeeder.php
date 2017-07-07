<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name ="Naphattha Chomsri";
        $user->username = "admin";
        $user->email = "ribbin01@gmail.com";
        $user->password = bcrypt( '1234');
        $user->save();

    }
}
