<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Video;
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
        User::factory()->create([
            'name' => 'Tony Messias',
            'email' => 'tonysm@hey.com',
        ]);

        Post::factory()->count(4)->hasComments(3)->create();
        Video::factory()->count(2)->hasComments(4)->create();
    }
}
