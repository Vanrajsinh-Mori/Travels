<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\citys;
use App\Models\hotels;

class hotelcontroller extends Controller
{
        public function addview($id){
                $citys = citys::all();
                $hotels = hotels::where('hotel_id', $id)->first();
                $data = hotels::select('hotels.*', 'citys.citys_name',)
                        ->leftJoin('citys', 'citys.city_id', '=', 'hotels.hotel_id')->get();
                $data1 = compact('data', 'hotels', 'citys');
                return view('bookhotel')->with($data1);
        }
    
        public function book($id){
                $citys = citys::all();
                $data = compact('citys');
                return view('book')->with($data);
        }
}
