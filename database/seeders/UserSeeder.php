<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = (int)$this->command->ask('How many User do you need ?', 10);

        $this->command->info("Creating {$count} user.");
        $post = factory(App\Models\User::class, $count)->create();
        $this->command->info('User Created!');
    }
}
