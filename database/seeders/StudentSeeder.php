<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
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
            DB::table('students')->insert([
                'surname' => $faker->name,
                'givenname'=> $faker->name,
                'date_of_birth'=> $faker->date,
                'yearenrolled'=> $faker->numberBetween(1, 4),
                // lay ngau nhien 1 program_id tu bang programs
                'program_id'=> $faker->randomElement(DB::table('programs')->pluck('id')->toArray()),
            ]);
        }
    }
}
