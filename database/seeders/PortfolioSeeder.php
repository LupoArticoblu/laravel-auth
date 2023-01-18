<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
       for($i = 0; $i < 100; $i++){
        $new_post = new Post();
        $new_post->title = $faker->sentence();
        $new_post->slug = Post::generateSlug($new_post->title);
        $new_post->date = date('Y-m-d');
        $new_post->image = '';
        $new_post->text = $faker->paragraph(9);
        $new_post->save();
       }
    
    }
}
