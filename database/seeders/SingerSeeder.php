<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Singer;

class SingerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $singer = new Singer();
            $singer->name = $faker->name;
            $singer->surname = $faker->lastName();
            $singer->birth_date = $faker->date('Y-m-d');
            $singer->genre = $faker->randomElement(['latino', 'metal', 'rock', 'pop']);
            $singer->record_company = $faker->company();
            $singer->save();
        }
    }
}
