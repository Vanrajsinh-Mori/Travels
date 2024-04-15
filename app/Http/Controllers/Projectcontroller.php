<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\citys;
use App\Models\Book;
use App\Models\hotels;

class Projectcontroller extends Controller
{
   
    public function view(){
        $citys = Citys::all();
        $booking = Book::all();
        $hotels = Hotels::all();
        $data = compact('citys', 'hotels','booking');
        return view('index')->with($data);
    }

    public function hotels($id, Request $request){
        $citys = Citys::all();
        $city = Citys::find($id);
    
        $search = $request->input('search'); 
        $hotels = Hotels::where('city_id', $id)
                        ->when($search, function($query) use ($search) {
                            $query->where('hotels_name', 'like', '%'.$search.'%');
                        })
                        ->get();
    
        $data = compact('city', 'citys', 'hotels');
    
        return view('hotels')->with($data);
    }
    

}
