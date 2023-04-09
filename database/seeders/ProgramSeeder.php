<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker =Faker::create();
        for ($i = 0; $i < 100; $i++) {
            DB::table('programs')->insert([
                'name' => $faker->name,
                'creditpoints'=> $faker->numberBetween(1, 400),
                'yearcommenced'=> $faker->numberBetween(1, 4),
            ]);
        }
    }
}
