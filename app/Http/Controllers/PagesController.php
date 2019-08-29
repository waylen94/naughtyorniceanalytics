<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Hotel;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show']]);
    }
    public function show()
    {
        return view('pages.welcome');
    }
    
    
    public function dashboard(User $user)
    {
        if(!$user->Hotel()->get()->isEmpty()){
            
            $platewaste = $user->Hotel->platewaste->take(10);
            return view('pages.Dashboard',compact('user','platewaste'));
        }else{
            
            return view('pages.Contact', compact('user'));
        }
    }
    public function account(User $user)
    {
        return view('pages.Account', compact('user'));
    }
    public function analytics(User $user)
    {
        $platewaste = $user->Hotel->platewaste->take(10);
        return view('pages.Analytics', compact('user','platewaste'));
    }
    public function contact(User $user)
    {
        return view('pages.Contact', compact('user'));
    }
    public function news(User $user)
    {
        return view('pages.News&Tips', compact('user'));
    }
    public function benchmark(User $user)
    {
        function benchamrk_dataset($user, $collection){
            if($collection->count()>=3){
            $min = $collection->min();
            $avg = $collection->avg();
            $max = $collection->max();
            $performance = $user->hotel->platewaste->take(7)->pluck('weight_kg')->avg();
            
            
            return collect([$min,$avg,$max,$performance]); 
            }else{
                return collect([0,0,0,0]);
            }
        }
       
        //Star Hotel for Benchmark
        $one_star_hotel = Hotel::where('star',1)->get();
        $two_star_hotel = Hotel::where('star',2)->get();
        $three_star_hotel = Hotel::where('star',3)->get();
        $four_star_hotel = Hotel::where('star',4)->get();
        $five_star_hotel = Hotel::where('star',5)->get();
        
        //room number hotel for benchmark
        $less_100_hotel = Hotel::where('room_number','<=',100);
        
        $between_100_hotel = Hotel::whereBetween('room_number',[100,200]);
        $between_200_hotel = Hotel::whereBetween('room_number',[200,300]);
        $between_300_hotel = Hotel::whereBetween('room_number',[300,400]);
        $between_400_hotel = Hotel::whereBetween('room_number',[400,500]);
        
        $more_500_hotel = Hotel::where('room_number','>=',500);
        
        //country hotel for benchmark
        $america_hotel = Hotel::where('country','America');
        $australia_hotel = Hotel::where('country','Australia');
        
        
        //style hotel for benchmark
        $business_hotel = Hotel::where('style','Business');
        $leisure_hotel = Hotel::where('style','Leisure');
        
        
        /**
         * calculate corresponded benchamrk for different type of hotels
         * */
        //1 star
        $one_star_statistics = $one_star_hotel->map(function ($item, $key) {
            return $item->platewaste->take(7)->pluck('weight_kg')->avg();
        });
        //2 star
        $two_star_statistics = $two_star_hotel->map(function ($item, $key) {
            return $item->platewaste->take(7)->pluck('weight_kg')->avg();
        });
        //3 star
        $three_star_statistics = $three_star_hotel->map(function ($item, $key) {
            return $item->platewaste->take(7)->pluck('weight_kg')->avg();
        });
        //4 star
        $four_star_statistics = $four_star_hotel->map(function ($item, $key) {
            return $item->platewaste->take(7)->pluck('weight_kg')->avg();
            });       
       //5 star
        $five_star_statistics = $five_star_hotel->map(function ($item, $key) {
            return $item->platewaste->take(7)->pluck('weight_kg')->avg();
            });
        
       //room number benchamrk statistics
        
       //country benchamrk statistics
       
        //style benchamrk statistics
        
        
        
        //final benchmark dataset
        $star_benchmark = collect([
            
            'one'=>benchamrk_dataset($user, $one_star_statistics),
            'two'=>benchamrk_dataset($user, $two_star_statistics),
            'three'=>benchamrk_dataset($user, $three_star_statistics),
            'four'=>benchamrk_dataset($user, $four_star_statistics),
            'five'=>benchamrk_dataset($user, $five_star_statistics)
            
        ]);
        
        
        
        
        $room_benchmark = [];
        $country_benchmark = [];
        $type_benchmark = [];
        
        
        return view('pages.Benchmark', compact('user','star_benchmark'));
    }
}