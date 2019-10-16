<?php

use Illuminate\Database\Seeder;
// use MessageTableSeeder;
// use App\Message;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(MessageTableSeeder::class);
        $faker = Faker::create();
        foreach (range(1,200) as $index) {
	        DB::table('messages')->insert([
                'message' => $faker->text($maxNbChars = 204),
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
            ]);
        }
    }
}
