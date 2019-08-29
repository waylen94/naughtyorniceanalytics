<?php

use Illuminate\Database\Seeder;
use App\Models\Hotel;

class HotelsTableSeeder extends Seeder
{
    public function run()
    {
        $user_ids = ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15'];
        $faker = app(Faker\Generator::class);
        $hotels = factory(Hotel::class)->times(15)->make()
                                        ->each(function ($hotel) use ($faker, $user_ids) {
                                            
            $hotel->user_id = $faker->unique()->randomElement($user_ids);
        });

        Hotel::insert($hotels->toArray());
        
        
        $user = Hotel::find(1);
        $user->country = 'Australia';
        $user->style = 'Business';
        $user->star = 3;
        $user->room_number =234;
        $user->save();
        $user = Hotel::find(2);
        $user->country = 'Australia';
        $user->style = 'Business';
        $user->star = 3;
        $user->room_number =234;
        $user->save();
        $user = Hotel::find(3);
        $user->country = 'Australia';
        $user->style = 'Business';
        $user->star = 3;
        $user->room_number =234;
        $user->save();
        $user = Hotel::find(4);
        $user->country = 'America';
        $user->style = 'Leisure';
        $user->star = 4;
        $user->room_number =334;
        $user->save();
        $user = Hotel::find(5);
        $user->country = 'America';
        $user->style = 'Leisure';
        $user->star = 4;
        $user->room_number =334;
        $user->save();
        $user = Hotel::find(6);
        $user->country = 'Australia';
        $user->style = 'Business';
        $user->star = 4;
        $user->room_number =334;
        $user->save();
        $user = Hotel::find(7);
        $user->country = 'America';
        $user->style = 'Leisure';
        $user->star = 5;
        $user->room_number =434;
        $user->save();
        $user = Hotel::find(8);
        $user->country = 'America';
        $user->style = 'Leisure';
        $user->star = 5;
        $user->room_number =434;
        $user->save();
        $user = Hotel::find(9);
        $user->country = 'Australia';
        $user->style = 'Leisure';
        $user->star = 5;
        $user->room_number =434;
        $user->save();
        $user = Hotel::find(10);
        $user->country = 'Australia';
        $user->style = 'Leisure';
        $user->star = 3;
        $user->room_number =534;
        $user->save();
        $user = Hotel::find(11);
        $user->country = 'Australia';
        $user->style = 'Leisure';
        $user->star = 3;
        $user->room_number =534;
        $user->save();
        $user = Hotel::find(12);
        $user->country = 'Australia';
        $user->style = 'Leisure';
        $user->star = 5;
        $user->room_number =534;
        $user->save();
        $user = Hotel::find(13);
        $user->country = 'Australia';
        $user->style = 'Leisure';
        $user->star = 4;
        $user->room_number =434;
        $user->save();
    }

}

