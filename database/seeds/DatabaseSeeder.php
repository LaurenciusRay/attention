<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EventOrganizerUserSeeder::class);
        $this->call(EventCategorySeeder::class);
        $this->call(EventOrganizerSeeder::class);
    }
}
