<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = (int)$this->command->ask('How many posts do you need ?', 10);

        $this->command->info("Creating {$count} posts.");
        $post = factory(App\Models\Post::class, $count)->create();
        $this->command->info('Posts Created!');


    }
}
