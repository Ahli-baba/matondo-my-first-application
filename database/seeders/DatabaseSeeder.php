<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Tag;
use App\Models\Job;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create 10 users
        $users = User::factory(10)->create();

        // Create 10 tags
        $tags = Tag::factory(10)->create();

        // Create 20 jobs and assign each to a random employer + tags
        Job::factory(20)->create()->each(function ($job) use ($users, $tags) {
            $job->employer_id = $users->random()->id; // ✅ fixed column name
            $job->save();

            $job->tags()->attach($tags->random(2));
        });
    }
}
