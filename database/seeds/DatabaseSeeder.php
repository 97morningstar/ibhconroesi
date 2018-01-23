<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        	User::truncate();

        	$user = User::create([
        		'name' => 'Elisa',
        		'email' => '97morningstar@gmail.com',
        		'password' => 'elisa1997'
        	]);
    }
}
