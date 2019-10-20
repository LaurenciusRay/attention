<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      //please add this command before you run seed composer require "emanueleminotto/faker-placehold-it-provider"
 
      $faker = Faker::create('id_ID');
      $faker->addProvider(new EmanueleMinotto\Faker\PlaceholdItProvider($faker));
 
    	for($i = 1; $i <= 32; $i++){
 
    		DB::table('tenant_users')->insert([
    			'email' => $faker->freeEmail,
    			'password' => $faker->password,
          'name' => $faker->name,
          'category' => $faker->creditCardType,
          'image_banner' => $faker->ImageUrl(50, null, array(), 'lorem ipsum'),
          'description' => $faker->text
    		]);
 
      }
    }
}
