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
                                            
            $hotel->user_id = $faker->randomElement($user_ids);
        });

        Hotel::insert($hotels->toArray());
    }

}

