<?php

namespace Database\Seeders;

use App\Models\Post;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();
        $faker=Factory::create();

        $amount=10;
        foreach (range(1, $amount) as $id){
            Post::create([
                'title'=>$faker->sentence,
                'content'=>$faker->paragraph,
                'created_at'=>Carbon::now()->subDays($amount-$id)->addHours(rand(1,12)),
                'updated_at'=>Carbon::now()->subDays($amount-$id)->addHours(rand(1,12))->addMinutes(rand(0,59)),
            ]);
        }

    }
}
