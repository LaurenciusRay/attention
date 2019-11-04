<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EoDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 10; $i++)
        {
            DB::table('eo_details')->insert([
                'eo_users_id' => $faker->numberBetween(1,2),
                'title' => $faker->sentence(2, true),
                'image' => 'events/' . $faker->image('public/storage/events', 1000, 714, null, false),
                'description' => $faker->paragraph( 3, true),
                'eo_detail_categories_id' => $faker->numberBetween(1, 3),
                'start_date' => $faker->dateTimeThisMonth('now'),
                'end_date' => $faker->dateTimeBetween('next Monday', 'next Monday +7 days'),
                'capacity' => $faker->numberBetween(1,20),
            ]);
        }
    }
}
