<?php

use Illuminate\Database\Seeder;
use App\Models\Platewaste;

class PlatewastesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $hotel_ids = ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20'];
        $faker = app(Faker\Generator::class);
        
        $platewastes = factory(Platewaste::class)->times(1000)->make()
        ->each(function ($platewaste) use ($faker, $hotel_ids) {
            
            $platewaste->hotel_id = $faker->randomElement($hotel_ids);
        });
            
        Platewaste::insert($platewastes->toArray());
    }
}
