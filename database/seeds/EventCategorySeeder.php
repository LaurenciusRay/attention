<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EventCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 4; $i++)
        {
            DB::table('eo_detail_categories')->insert([
                'name' => $faker->word,
            ]);
        }
    }
}
