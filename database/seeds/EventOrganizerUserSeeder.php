<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EventOrganizerUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 2; $i++)
        {
            DB::table('eo_users')->insert([
                'email' => $faker->unique()->email,
                'password' => 'password',
                'name' => $faker->name,
                'image_banner' => 'EoPhotos/' . $faker->image('public/storage/EoPhotos', 1000, 714, null, false),
                'description' => $faker->paragraph( 3, true),
            ]);
        }
    }
}
