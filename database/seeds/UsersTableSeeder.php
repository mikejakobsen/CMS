<?php

use Illuminate\Database\Seeder;
use App\User as User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the user database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        User::create(['name' => 'Admin', 'email' => 'mike@jakobsen.dk', 'password' => 'secret']);
    }
}
