<?php
//color scheme https://www.colorhexa.com/62f31a-to-dc0100
namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\User;
use Illuminate\Http\Request;

class BenchmarkController extends Controller
{
    public function dailybenchmark(User $user)
    {
        function benchamrk_dataset_join($user, $collection){
            $user = $user->hotel->platewaste->take(1);
            $performance = round(($user->pluck('weight_kg')->sum()/$user->pluck("people")->sum()),2);
                
            return $collection->prepend($performance)->sort()->values()->prepend($performance);
        }
        
        function platewaste_statistics($hotel_data){
            return $hotel_data->map(function ($item, $key) {
                $item = $item->platewaste->take(1);
                return round(($item->pluck('weight_kg')->sum())/($item->pluck("people")->sum()),2);
            });
        }
        
        //Star Hotel for Benchmark
        $one_star_hotel = Hotel::where('star',1)->get();
        $two_star_hotel = Hotel::where('star',2)->get();
        $three_star_hotel = Hotel::where('star',3)->get();
        $four_star_hotel = Hotel::where('star',4)->get();
        $five_star_hotel = Hotel::where('star',5)->get();
        
        //room number hotel for benchmark
        $less_100_hotel = Hotel::where('room_number','<=',100)->get();
        
        $between_100_hotel = Hotel::whereBetween('room_number',[100,200])->get();
        $between_200_hotel = Hotel::whereBetween('room_number',[200,300])->get();
        $between_300_hotel = Hotel::whereBetween('room_number',[300,400])->get();
        $between_400_hotel = Hotel::whereBetween('room_number',[400,500])->get();
        
        $more_500_hotel = Hotel::where('room_number','>=',500)->get();
        
        //country hotel for benchmark
        $america_hotel = Hotel::where('country','America')->get();
        $australia_hotel = Hotel::where('country','Australia')->get();
        
        
        //style hotel for benchmark
        $business_hotel = Hotel::where('style','Business')->get();
        $leisure_hotel = Hotel::where('style','Leisure')->get();
        
        
        $one_star_statistics = platewaste_statistics($one_star_hotel);
        $two_star_statistics = platewaste_statistics($two_star_hotel);
        $three_star_statistics = platewaste_statistics($three_star_hotel);
        $four_star_statistics = platewaste_statistics($four_star_hotel);
        $five_star_statistics = platewaste_statistics($five_star_hotel);
        
        //room number benchamrk statistics
        $less_100_room_statistics = platewaste_statistics($less_100_hotel);
        $between_100_room_statistics = platewaste_statistics($between_100_hotel);
        $between_200_room_statistics = platewaste_statistics($between_200_hotel);
        $between_300_room_statistics = platewaste_statistics($between_300_hotel);
        $between_400_room_statistics = platewaste_statistics($between_400_hotel);
        $more_500_room_statistics = platewaste_statistics($more_500_hotel);
        
        //country benchamrk statistics
        $america_hotel_statistics = platewaste_statistics($america_hotel);
        $australia_hotel_statistics = platewaste_statistics($australia_hotel);
        
        //style benchamrk statistics
        $leisure_hotel_statistics = platewaste_statistics($leisure_hotel);
        $business_hotel_statistics = platewaste_statistics($business_hotel);
        
        
        //final benchmark dataset
        $star_benchmark = collect([
            
            'one'=>benchamrk_dataset_join($user, $one_star_statistics),
            'two'=>benchamrk_dataset_join($user, $two_star_statistics),
            'three'=>benchamrk_dataset_join($user, $three_star_statistics),
            'four'=>benchamrk_dataset_join($user, $four_star_statistics),
            'five'=>benchamrk_dataset_join($user, $five_star_statistics)
            
        ]);
        
        $room_benchmark = collect([
            '0'=>benchamrk_dataset_join($user, $less_100_room_statistics),
            '100'=>benchamrk_dataset_join($user, $between_100_room_statistics),
            '200'=>benchamrk_dataset_join($user, $between_200_room_statistics),
            '300'=>benchamrk_dataset_join($user, $between_300_room_statistics),
            '400'=>benchamrk_dataset_join($user, $between_400_room_statistics),
            '500'=>benchamrk_dataset_join($user, $more_500_room_statistics)
        ]);
        $country_benchmark = collect([
            'america'=>benchamrk_dataset_join($user, $america_hotel_statistics),
            'australia'=>benchamrk_dataset_join($user, $australia_hotel_statistics)
        ]);
        $type_benchmark = collect([
            'leisure'=>benchamrk_dataset_join($user, $leisure_hotel_statistics),
            'business'=>benchamrk_dataset_join($user, $business_hotel_statistics)
        ]);
        
        
        
        
        return view('pages.Benchmark', compact('user','star_benchmark','room_benchmark','country_benchmark','type_benchmark'));
    }
        
        
        public function weeklybenchmark(User $user)
        {
            function benchamrk_dataset($user, $collection){


                $user = $user->hotel->platewaste->take(7);
                $performance = round(($user->pluck('weight_kg')->sum()/$user->pluck("people")->sum()),2);
                    
                return $collection->prepend($performance)->sort()->values()->prepend($performance);
            }
            
            function platewaste_statistics($hotel_data){
                return $hotel_data->map(function ($item, $key) {
                    $item = $item->platewaste->take(7);
                    return round(($item->pluck('weight_kg')->sum())/($item->pluck("people")->sum()),2);
                });
            }
            
            //Star Hotel for Benchmark
            $one_star_hotel = Hotel::where('star',1)->get();
            $two_star_hotel = Hotel::where('star',2)->get();
            $three_star_hotel = Hotel::where('star',3)->get();
            $four_star_hotel = Hotel::where('star',4)->get();
            $five_star_hotel = Hotel::where('star',5)->get();
            
            //room number hotel for benchmark
            $less_100_hotel = Hotel::where('room_number','<=',100)->get();
            
            $between_100_hotel = Hotel::whereBetween('room_number',[100,200])->get();
            $between_200_hotel = Hotel::whereBetween('room_number',[200,300])->get();
            $between_300_hotel = Hotel::whereBetween('room_number',[300,400])->get();
            $between_400_hotel = Hotel::whereBetween('room_number',[400,500])->get();
            
            $more_500_hotel = Hotel::where('room_number','>=',500)->get();
            
            //country hotel for benchmark
            $america_hotel = Hotel::where('country','America')->get();
            $australia_hotel = Hotel::where('country','Australia')->get();
            
            
            //style hotel for benchmark
            $business_hotel = Hotel::where('style','Business')->get();
            $leisure_hotel = Hotel::where('style','Leisure')->get();
            
            
            $one_star_statistics = platewaste_statistics($one_star_hotel);
            $two_star_statistics = platewaste_statistics($two_star_hotel);
            $three_star_statistics = platewaste_statistics($three_star_hotel);
            $four_star_statistics = platewaste_statistics($four_star_hotel);
            $five_star_statistics = platewaste_statistics($five_star_hotel);
            
            //room number benchamrk statistics
            $less_100_room_statistics = platewaste_statistics($less_100_hotel);
            $between_100_room_statistics = platewaste_statistics($between_100_hotel);
            $between_200_room_statistics = platewaste_statistics($between_200_hotel);
            $between_300_room_statistics = platewaste_statistics($between_300_hotel);
            $between_400_room_statistics = platewaste_statistics($between_400_hotel);
            $more_500_room_statistics = platewaste_statistics($more_500_hotel);
            
            //country benchamrk statistics
            $america_hotel_statistics = platewaste_statistics($america_hotel);
            $australia_hotel_statistics = platewaste_statistics($australia_hotel);
            
            //style benchamrk statistics
            $leisure_hotel_statistics = platewaste_statistics($leisure_hotel);
            $business_hotel_statistics = platewaste_statistics($business_hotel);
            
            
            //final benchmark dataset
            $star_benchmark = collect([
                
                'one'=>benchamrk_dataset($user, $one_star_statistics),
                'two'=>benchamrk_dataset($user, $two_star_statistics),
                'three'=>benchamrk_dataset($user, $three_star_statistics),
                'four'=>benchamrk_dataset($user, $four_star_statistics),
                'five'=>benchamrk_dataset($user, $five_star_statistics)
                
            ]);
            
            $room_benchmark = collect([
                '0'=>benchamrk_dataset($user, $less_100_room_statistics),
                '100'=>benchamrk_dataset($user, $between_100_room_statistics),
                '200'=>benchamrk_dataset($user, $between_200_room_statistics),
                '300'=>benchamrk_dataset($user, $between_300_room_statistics),
                '400'=>benchamrk_dataset($user, $between_400_room_statistics),
                '500'=>benchamrk_dataset($user, $more_500_room_statistics)
            ]);
            $country_benchmark = collect([
                'america'=>benchamrk_dataset($user, $america_hotel_statistics),
                'australia'=>benchamrk_dataset($user, $australia_hotel_statistics)
            ]);
            $type_benchmark = collect([
                'leisure'=>benchamrk_dataset($user, $leisure_hotel_statistics),
                'business'=>benchamrk_dataset($user, $business_hotel_statistics)
            ]);
            
            
            return view('pages.Benchmark', compact('user','star_benchmark','room_benchmark','country_benchmark','type_benchmark'));
        }
        
        public function monthlybenchmark(User $user)
        {
            function benchamrk_dataset($user, $collection){
                $user = $user->hotel->platewaste->take(30);
                $performance = round(($user->pluck('weight_kg')->sum()/$user->pluck("people")->sum()),2);
                
                return $collection->prepend($performance)->sort()->values()->prepend($performance);
            }
            
            function platewaste_statistics($hotel_data){
                return $hotel_data->map(function ($item, $key) {
                    $item = $item->platewaste->take(30);
                    return round(($item->pluck('weight_kg')->sum())/($item->pluck("people")->sum()),2);
                });
            }
            
            //Star Hotel for Benchmark
            $one_star_hotel = Hotel::where('star',1)->get();
            $two_star_hotel = Hotel::where('star',2)->get();
            $three_star_hotel = Hotel::where('star',3)->get();
            $four_star_hotel = Hotel::where('star',4)->get();
            $five_star_hotel = Hotel::where('star',5)->get();
            
            //room number hotel for benchmark
            $less_100_hotel = Hotel::where('room_number','<=',100)->get();
            
            $between_100_hotel = Hotel::whereBetween('room_number',[100,200])->get();
            $between_200_hotel = Hotel::whereBetween('room_number',[200,300])->get();
            $between_300_hotel = Hotel::whereBetween('room_number',[300,400])->get();
            $between_400_hotel = Hotel::whereBetween('room_number',[400,500])->get();
            
            $more_500_hotel = Hotel::where('room_number','>=',500)->get();
            
            //country hotel for benchmark
            $america_hotel = Hotel::where('country','America')->get();
            $australia_hotel = Hotel::where('country','Australia')->get();
            
            
            //style hotel for benchmark
            $business_hotel = Hotel::where('style','Business')->get();
            $leisure_hotel = Hotel::where('style','Leisure')->get();
            
            
            $one_star_statistics = platewaste_statistics($one_star_hotel);
            $two_star_statistics = platewaste_statistics($two_star_hotel);
            $three_star_statistics = platewaste_statistics($three_star_hotel);
            $four_star_statistics = platewaste_statistics($four_star_hotel);
            $five_star_statistics = platewaste_statistics($five_star_hotel);
            
            //room number benchamrk statistics
            $less_100_room_statistics = platewaste_statistics($less_100_hotel);
            $between_100_room_statistics = platewaste_statistics($between_100_hotel);
            $between_200_room_statistics = platewaste_statistics($between_200_hotel);
            $between_300_room_statistics = platewaste_statistics($between_300_hotel);
            $between_400_room_statistics = platewaste_statistics($between_400_hotel);
            $more_500_room_statistics = platewaste_statistics($more_500_hotel);
            
            //country benchamrk statistics
            $america_hotel_statistics = platewaste_statistics($america_hotel);
            $australia_hotel_statistics = platewaste_statistics($australia_hotel);
            
            //style benchamrk statistics
            $leisure_hotel_statistics = platewaste_statistics($leisure_hotel);
            $business_hotel_statistics = platewaste_statistics($business_hotel);
            
            
            //final benchmark dataset
            $star_benchmark = collect([
                
                'one'=>benchamrk_dataset($user, $one_star_statistics),
                'two'=>benchamrk_dataset($user, $two_star_statistics),
                'three'=>benchamrk_dataset($user, $three_star_statistics),
                'four'=>benchamrk_dataset($user, $four_star_statistics),
                'five'=>benchamrk_dataset($user, $five_star_statistics)
                
            ]);
            
            $room_benchmark = collect([
                '0'=>benchamrk_dataset($user, $less_100_room_statistics),
                '100'=>benchamrk_dataset($user, $between_100_room_statistics),
                '200'=>benchamrk_dataset($user, $between_200_room_statistics),
                '300'=>benchamrk_dataset($user, $between_300_room_statistics),
                '400'=>benchamrk_dataset($user, $between_400_room_statistics),
                '500'=>benchamrk_dataset($user, $more_500_room_statistics)
            ]);
            $country_benchmark = collect([
                'america'=>benchamrk_dataset($user, $america_hotel_statistics),
                'australia'=>benchamrk_dataset($user, $australia_hotel_statistics)
            ]);
            $type_benchmark = collect([
                'leisure'=>benchamrk_dataset($user, $leisure_hotel_statistics),
                'business'=>benchamrk_dataset($user, $business_hotel_statistics)
            ]);
            
            
            return view('pages.Benchmark', compact('user','star_benchmark','room_benchmark','country_benchmark','type_benchmark'));
        }
        
        public function yearlybenchmark(User $user)
        {
            function benchamrk_dataset($user, $collection){
                $user = $user->hotel->platewaste->take(365);
                $performance = round(($user->pluck('weight_kg')->sum()/$user->pluck("people")->sum()),2);
                
                return $collection->prepend($performance)->sort()->values()->prepend($performance);
            }
            
            function platewaste_statistics($hotel_data){
                return $hotel_data->map(function ($item, $key) {
                    $item = $item->platewaste->take(365);
                    return round(($item->pluck('weight_kg')->sum())/($item->pluck("people")->sum()),2);
                });
            }
            
            //Star Hotel for Benchmark
            $one_star_hotel = Hotel::where('star',1)->get();
            $two_star_hotel = Hotel::where('star',2)->get();
            $three_star_hotel = Hotel::where('star',3)->get();
            $four_star_hotel = Hotel::where('star',4)->get();
            $five_star_hotel = Hotel::where('star',5)->get();
            
            //room number hotel for benchmark
            $less_100_hotel = Hotel::where('room_number','<=',100)->get();
            
            $between_100_hotel = Hotel::whereBetween('room_number',[100,200])->get();
            $between_200_hotel = Hotel::whereBetween('room_number',[200,300])->get();
            $between_300_hotel = Hotel::whereBetween('room_number',[300,400])->get();
            $between_400_hotel = Hotel::whereBetween('room_number',[400,500])->get();
            
            $more_500_hotel = Hotel::where('room_number','>=',500)->get();
            
            //country hotel for benchmark
            $america_hotel = Hotel::where('country','America')->get();
            $australia_hotel = Hotel::where('country','Australia')->get();
            
            
            //style hotel for benchmark
            $business_hotel = Hotel::where('style','Business')->get();
            $leisure_hotel = Hotel::where('style','Leisure')->get();
            
            
            $one_star_statistics = platewaste_statistics($one_star_hotel);
            $two_star_statistics = platewaste_statistics($two_star_hotel);
            $three_star_statistics = platewaste_statistics($three_star_hotel);
            $four_star_statistics = platewaste_statistics($four_star_hotel);
            $five_star_statistics = platewaste_statistics($five_star_hotel);
            
            //room number benchamrk statistics
            $less_100_room_statistics = platewaste_statistics($less_100_hotel);
            $between_100_room_statistics = platewaste_statistics($between_100_hotel);
            $between_200_room_statistics = platewaste_statistics($between_200_hotel);
            $between_300_room_statistics = platewaste_statistics($between_300_hotel);
            $between_400_room_statistics = platewaste_statistics($between_400_hotel);
            $more_500_room_statistics = platewaste_statistics($more_500_hotel);
            
            //country benchamrk statistics
            $america_hotel_statistics = platewaste_statistics($america_hotel);
            $australia_hotel_statistics = platewaste_statistics($australia_hotel);
            
            //style benchamrk statistics
            $leisure_hotel_statistics = platewaste_statistics($leisure_hotel);
            $business_hotel_statistics = platewaste_statistics($business_hotel);
            
            
            //final benchmark dataset
            $star_benchmark = collect([
                
                'one'=>benchamrk_dataset($user, $one_star_statistics),
                'two'=>benchamrk_dataset($user, $two_star_statistics),
                'three'=>benchamrk_dataset($user, $three_star_statistics),
                'four'=>benchamrk_dataset($user, $four_star_statistics),
                'five'=>benchamrk_dataset($user, $five_star_statistics)
                
            ]);
            
            $room_benchmark = collect([
                '0'=>benchamrk_dataset($user, $less_100_room_statistics),
                '100'=>benchamrk_dataset($user, $between_100_room_statistics),
                '200'=>benchamrk_dataset($user, $between_200_room_statistics),
                '300'=>benchamrk_dataset($user, $between_300_room_statistics),
                '400'=>benchamrk_dataset($user, $between_400_room_statistics),
                '500'=>benchamrk_dataset($user, $more_500_room_statistics)
            ]);
            $country_benchmark = collect([
                'america'=>benchamrk_dataset($user, $america_hotel_statistics),
                'australia'=>benchamrk_dataset($user, $australia_hotel_statistics)
            ]);
            $type_benchmark = collect([
                'leisure'=>benchamrk_dataset($user, $leisure_hotel_statistics),
                'business'=>benchamrk_dataset($user, $business_hotel_statistics)
            ]);
            
            
            return view('pages.Benchmark', compact('user','star_benchmark','room_benchmark','country_benchmark','type_benchmark'));
        }
        
        
        
        //deprecated 
        public function origin_benchmark(User $user)
        {
            function benchamrk_dataset($user, $collection){
                if($collection->count()>=3){
                    $min = round($collection->min(),2);
                    $avg = round($collection->avg(),2);
                    $max = round($collection->max(),2);
                    $performance = round($user->hotel->platewaste->take(7)->pluck('weight_kg')->avg(),2);
                    
                    return collect([$min,$avg,$max,$performance]);
                }else{
                    
                    return collect([0,0,0,0]);
                }
            }
            
            function platewaste_statistics($hotel_data){
                return $hotel_data->map(function ($item, $key) {
                    return $item->platewaste->take(7)->pluck('weight_kg')->avg();
                });
            }
            
            //Star Hotel for Benchmark
            $one_star_hotel = Hotel::where('star',1)->get();
            $two_star_hotel = Hotel::where('star',2)->get();
            $three_star_hotel = Hotel::where('star',3)->get();
            $four_star_hotel = Hotel::where('star',4)->get();
            $five_star_hotel = Hotel::where('star',5)->get();
            
            //room number hotel for benchmark
            $less_100_hotel = Hotel::where('room_number','<=',100)->get();
            
            $between_100_hotel = Hotel::whereBetween('room_number',[100,200])->get();
            $between_200_hotel = Hotel::whereBetween('room_number',[200,300])->get();
            $between_300_hotel = Hotel::whereBetween('room_number',[300,400])->get();
            $between_400_hotel = Hotel::whereBetween('room_number',[400,500])->get();
            
            $more_500_hotel = Hotel::where('room_number','>=',500)->get();
            
            //country hotel for benchmark
            $america_hotel = Hotel::where('country','America')->get();
            $australia_hotel = Hotel::where('country','Australia')->get();
            
            
            //style hotel for benchmark
            $business_hotel = Hotel::where('style','Business')->get();
            $leisure_hotel = Hotel::where('style','Leisure')->get();
            
            
            $one_star_statistics = platewaste_statistics($one_star_hotel);
            $two_star_statistics = platewaste_statistics($two_star_hotel);
            $three_star_statistics = platewaste_statistics($three_star_hotel);
            $four_star_statistics = platewaste_statistics($four_star_hotel);
            $five_star_statistics = platewaste_statistics($five_star_hotel);
            
            //room number benchamrk statistics
            $less_100_room_statistics = platewaste_statistics($less_100_hotel);
            $between_100_room_statistics = platewaste_statistics($between_100_hotel);
            $between_200_room_statistics = platewaste_statistics($between_200_hotel);
            $between_300_room_statistics = platewaste_statistics($between_300_hotel);
            $between_400_room_statistics = platewaste_statistics($between_400_hotel);
            $more_500_room_statistics = platewaste_statistics($more_500_hotel);
            
            //country benchamrk statistics
            $america_hotel_statistics = platewaste_statistics($america_hotel);
            $australia_hotel_statistics = platewaste_statistics($australia_hotel);
            
            //style benchamrk statistics
            $leisure_hotel_statistics = platewaste_statistics($leisure_hotel);
            $business_hotel_statistics = platewaste_statistics($business_hotel);
            
            
            //final benchmark dataset
            $star_benchmark = collect([
                
                'one'=>benchamrk_dataset($user, $one_star_statistics),
                'two'=>benchamrk_dataset($user, $two_star_statistics),
                'three'=>benchamrk_dataset($user, $three_star_statistics),
                'four'=>benchamrk_dataset($user, $four_star_statistics),
                'five'=>benchamrk_dataset($user, $five_star_statistics)
                
            ]);
            
            $room_benchmark = collect([
                '0'=>benchamrk_dataset($user, $less_100_room_statistics),
                '100'=>benchamrk_dataset($user, $between_100_room_statistics),
                '200'=>benchamrk_dataset($user, $between_200_room_statistics),
                '300'=>benchamrk_dataset($user, $between_300_room_statistics),
                '400'=>benchamrk_dataset($user, $between_400_room_statistics),
                '500'=>benchamrk_dataset($user, $more_500_room_statistics)
            ]);
            $country_benchmark = collect([
                'america'=>benchamrk_dataset($user, $america_hotel_statistics),
                'australia'=>benchamrk_dataset($user, $australia_hotel_statistics)
            ]);
            $type_benchmark = collect([
                'leisure'=>benchamrk_dataset($user, $leisure_hotel_statistics),
                'business'=>benchamrk_dataset($user, $business_hotel_statistics)
            ]);
            
            
            return view('pages.Benchmark', compact('user','star_benchmark','room_benchmark','country_benchmark','type_benchmark'));
        }
}
