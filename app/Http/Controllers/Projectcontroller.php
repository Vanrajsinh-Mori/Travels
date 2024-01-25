<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\citys;

class Projectcontroller extends Controller
{
   
    public function view(){
        $citys = Citys::all();
        $data = compact('citys');
        return view('index')->with($data);
    }
}
