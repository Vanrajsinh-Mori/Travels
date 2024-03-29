<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\citys;
use App\Models\hotels;

class Projectcontroller extends Controller
{
   
    public function view(){
        $citys = Citys::all();
        $hotels = Hotels::all();
        $data = compact('citys', 'hotels');
        return view('index')->with($data);
    }

 public function hotels($id){
    $citys = Citys::all();
    $city = Citys::find($id);
    $hotels = Hotels::where('city_id', $id)->get();
    $data = compact('city', 'citys', 'hotels');

    
    return view('hotels')->with($data);
}

}
