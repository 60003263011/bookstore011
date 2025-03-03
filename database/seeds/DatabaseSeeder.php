<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $user = new \App\User();
        $user->name = 'Pongsatorn Aranonphinit';
        $user->email = 'frong@gmail.com';
        $user->password = Hash::make('123456');
        $user->save();
    }
}
