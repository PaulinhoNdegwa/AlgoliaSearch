<?php

use Illuminate\Database\Seeder;
use App\Message;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class MessageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,10) as $index) {
	        DB::table('messages')->insert([
	            'messages' => $faker->paragraph,
	        ]);
	}
    }
}
