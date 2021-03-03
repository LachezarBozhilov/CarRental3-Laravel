<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call('CarsTableSeeder');
        $this->call('UsersTableSeeder');
        $this->call('ContactUSTableSeeder');
        $this->call('RentTableSeeder');
    }
}
