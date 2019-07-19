<?php

use Illuminate\Database\Seeder;
use App\Models\Hotel;

class HotelsTableSeeder extends Seeder
{
    public function run()
    {
        $hotels = factory(Hotel::class)->times(50)->make()->each(function ($hotel, $index) {
            if ($index == 0) {
                // $hotel->field = 'value';
            }
        });

        Hotel::insert($hotels->toArray());
    }

}

