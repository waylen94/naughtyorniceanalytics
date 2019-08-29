<?php

use Illuminate\Database\Seeder;
use App\Models\News;
use App\Models\User;

class NewssTableSeeder extends Seeder
{
    public function run()
    {
        $user_ids = ['1','2','3','4','5','6'];
        
        $faker = app(Faker\Generator::class);
        
        
        
        $newss = factory(News::class)
                    ->times(30)
                    ->make()
                    ->each(function ($news, $index) 
                        use ($user_ids, $faker){
                        
            {
                $news->user_id = $faker->randomElement($user_ids);
            }
        });

        News::insert($newss->toArray());
    }

}

