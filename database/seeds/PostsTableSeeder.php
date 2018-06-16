<?php

use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;
// use Carbon\Carbon;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 0; $i < 20; $i++) {
            App\Post::create([
                'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'slug' => $faker->slug,
                'user_id' => 1,
                'body' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'created_at' => $faker->dateTime($max = 'now', $timezone = null)
            ]);
        }
    }
}
