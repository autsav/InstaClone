<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = (int)$this->command->ask('How many profile do you need ?', 10);

        $this->command->info("Creating {$count} profile.");
        $post = factory(App\Models\Profile::class, $count)->create();
        $this->command->info('Profile Created!');
    }
}
