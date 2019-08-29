<?php

use Illuminate\Database\Seeder;
use App\Models\Hotel;

class HotelsTableSeeder extends Seeder
{
    public function run()
    {
        $user_ids = ['1','2','3','4','5'];
        $faker = app(Faker\Generator::class);
        $hotels = factory(Hotel::class)->times(5)->make()
                                        ->each(function ($hotel) use ($faker, $user_ids) {
                                            
            $hotel->user_id = $faker->unique()->randomElement($user_ids);
        });

        Hotel::insert($hotels->toArray());
        
        
        $user = Hotel::find(1);
        $user->country = 'Australia';
        $user->style = 'Business';
        $user->save();
        $user = Hotel::find(2);
        $user->country = 'Australia';
        $user->style = 'Business';
        $user->save();
        $user = Hotel::find(3);
        $user->country = 'Australia';
        $user->style = 'Business';
        $user->save();
        $user = Hotel::find(4);
        $user->country = 'America';
        $user->style = 'Leisure';
        $user->save();
        $user = Hotel::find(5);
        $user->country = 'America';
        $user->style = 'Leisure';
        $user->save();
    }

}

