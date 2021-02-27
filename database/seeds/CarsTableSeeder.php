<?php
use App\Cars;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            [
                'id' => 1,
                'brand' => 'Volkswagen',
                'model' => 'Golf IV ',
                'image' => 'golf4.jpg',
                'year' => 1998,
                'capacity' => 4,
                'doors' => 4,
                'engine' => 'Diesel',
                'gearbox' => 'Manual',
                'status' => 'free',
                'hire_cost' => 24,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),

            ],
            [
                'id' => 2,
                'brand' => 'Audi',
                'model' => 'A3',
                'image' => 'audi_a3_v8',
                'year' => 2016,
                'capacity' => 5,
                'doors' => 4,
                'engine' => 'Gasoline',
                'gearbox' => 'Automatic',
                'status' => 'free',
                'hire_cost' => 55,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),

            ],
            [
                'id' => 3,
                'brand' => 'Audi',
                'model' => 'A6',
                'image' => 'audi_a6',
                'year' => 20019,
                'capacity' => 6,
                'doors' => 4,
                'engine' => 'Diesel',
                'gearbox' => 'Automatic',
                'status' => 'free',
                'hire_cost' => 1,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => 4,
                'brand' => 'Jeep',
                'model' => 'Cherokee',
                'image' => 'jeep_cherokee',
                'year' => 2007,
                'capacity' => 5,
                'doors' => 4,
                'engine' => 'Gasoline',
                'gearbox' => 'Manual',
                'status' => 'status',
                'hire_cost' => 1,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => 5,
                'brand' => 'test',
                'model' => 'test',
                'image' => 'test',
                'year' => 1,
                'capacity' => 1,
                'doors' => 1,
                'engine' => 'test',
                'gearbox' => 'test',
                'status' => 'test',
                'hire_cost' => 1,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => 6,
                'brand' => 'test',
                'model' => 'test',
                'image' => 'test',
                'year' => 1,
                'capacity' => 1,
                'doors' => 1,
                'engine' => 'test',
                'gearbox' => 'test',
                'status' => 'test',
                'hire_cost' => 1,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => 7,
                'brand' => 'test',
                'model' => 'test',
                'image' => 'test',
                'year' => 1,
                'capacity' => 1,
                'doors' => 1,
                'engine' => 'test',
                'gearbox' => 'test',
                'status' => 'test',
                'hire_cost' => 1,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => 8,
                'brand' => 'test',
                'model' => 'test',
                'image' => 'test',
                'year' => 1,
                'capacity' => 1,
                'doors' => 1,
                'engine' => 'test',
                'gearbox' => 'test',
                'status' => 'test',
                'hire_cost' => 1,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => 9,
                'brand' => 'test',
                'model' => 'test',
                'image' => 'test',
                'year' => 1,
                'capacity' => 1,
                'doors' => 1,
                'engine' => 'test',
                'gearbox' => 'test',
                'status' => 'test',
                'hire_cost' => 1,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => 10,
                'brand' => 'test',
                'model' => 'test',
                'image' => 'test',
                'year' => 1,
                'capacity' => 1,
                'doors' => 1,
                'engine' => 'test',
                'gearbox' => 'test',
                'status' => 'test',
                'hire_cost' => 1,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'id' => 11,
                'brand' => 'test',
                'model' => 'test',
                'image' => 'test',
                'year' => 1,
                'capacity' => 1,
                'doors' => 1,
                'engine' => 'test',
                'gearbox' => 'test',
                'status' => 'test',
                'hire_cost' => 1,
                'created_at' =>  \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],


        ]);
    }
}



