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
 
    	$faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 10; $i++){
 
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('tenant_users')->insert([
    			'email' => $faker->freeEmail,
    			'password' => $faker->password,
    			'name' => $faker->name,
          'image_banner' => $faker->imageUrl,
          'description' => $faker->text
    		]);
 
      }
    }
}
