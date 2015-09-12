<?php

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ConstantsTableSeeder extends Seeder
{
    /**
     *
     */
    public function run()
    {

        /*
         * Base User Accounts
         */
        // Mike's account
        $michael = User::create([
            'name' => 'Michael Norris',
            'email' => 'mstnorris@gmail.com',
            'password' => bcrypt('password'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
