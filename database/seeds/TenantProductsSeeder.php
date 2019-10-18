<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class TenantProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create('id_ID');
      $faker->addProvider(new EmanueleMinotto\Faker\PlaceholdItProvider($faker));
 
    	for($i = 1; $i <= 12; $i++){
 
    		DB::table('tenant_products')->insert([
    			'tenant_users_id' => $faker->randomDigit,
    			'title' => $faker->title('Title'),
          'image' => $faker->ImageUrl(50, null, array(), 'lorem ipsum'),
          'price' => $faker->randomNumber(2),
          ]);
 
      }
    }
}
