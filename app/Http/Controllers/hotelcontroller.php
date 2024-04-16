<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\citys;
use App\Models\User;
use App\Models\hotels;
use App\Models\Thread;
use App\Models\book;
use Illuminate\Support\Facades\Auth;

class hotelcontroller extends Controller
{
        public function addview($id){
                $citys = citys::all();
                $threads = Thread::where('thread_cat_id', $id)->get();
                $hotels = hotels::where('hotel_id', $id)->first();
                $data = hotels::select('hotels.*', 'citys.citys_name',)
                        ->leftJoin('citys', 'citys.city_id', '=', 'hotels.hotel_id')->get();
                $data1 = compact('data', 'hotels', 'citys','threads');
                return view('bookhotel')->with($data1);
        }

        // public function threadlist($id){
                // $category = Category::find($id);
                // $threads = Thread::all();
                // $threads = Thread::where('thread_cat_id', $id)->get();
                // $data =  compact('category', 'threads');
                // return view('bookhotel')->with($data);
        //     }
            
            public function saveThread(Request $request, $id) {
                $validatedData = $request->validate([
                    'title' => 'required|string',
                    'desc' => 'required|string',
                ]);
            
                $thread = new Thread();
                $thread->thread_title = $validatedData['title'];
                $thread->thread_desc = $validatedData['desc'];
                $thread->thread_cat_id = $id; 
                $thread->thread_user_id = Auth::id(); 
            
            
                $thread->save();
            
                return redirect()->back()->with('success', 'Thread has been added successfully!');
            }
    
        public function book($id){
                $citys = citys::all();
                $threads = Thread::where('thread_cat_id', $id)->get();
                $hotels = hotels::where('hotel_id', $id)->first();
                $data = compact('citys', 'hotels','threads');
                return view('book')->with($data);
        }


        
        public function paid(Request $request, $id) {
                $citys = citys::all();
                $requestData = $request->all();
                $hotels = hotels::where('hotel_id', $id)->first();
                $checkinDate = $requestData['checkin'] ?? null;
                $checkoutDate = $requestData['checkout'] ?? null;
                $hotelId = $id;
                $userId = auth()->id();
                $name = $hotels->hotels_name;
                $price = $requestData['totalPrice'] ?? null ;
                $image = $hotels->hotels_image_path;
                $status = "1";
                
                $booking = new Book();
                
                $booking->checkin_date = $checkinDate;
                $booking->checkout_date = $checkoutDate;
                $booking->hotel_id = $hotelId;
                $booking->user_id = $userId;
                $booking->name = $name;
                $booking->price = $price;
                $booking->hotel_image_path = $image;
                $booking->status = $status;
                
                $booking->save();
                
                $booking = Book::all();
                $alert = ['success' => 'Your hotel booked'];
                $data = compact('alert', 'citys','booking');
                $request->session()->flash('alert', $alert);
                
               

                return redirect('/')->with($data);
            }

            public function list(Request $request){
                $citys = Citys::all();
                $user = User::all();
            
                $search = $request->input('search');
            
                $booking = Book::query()
                            ->where('name', 'like', '%'.$search.'%')
                            ->orWhere('price', 'like', '%'.$search.'%')
                            ->orWhere('checkin_date', 'like', '%'.$search.'%')
                            ->orWhere('checkout_date', 'like', '%'.$search.'%')
                            ->get();
            
                $data = compact('citys', 'booking', 'user');
            
                return view('list')->with($data);
            }
            
            
            
            
}
