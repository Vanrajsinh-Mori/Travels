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
                // Validate the request data
                $validatedData = $request->validate([
                    'title' => 'required|string',
                    'desc' => 'required|string',
                ]);
            
                // Create a new thread instance
                $thread = new Thread();
                $thread->thread_title = $validatedData['title'];
                $thread->thread_desc = $validatedData['desc'];
                $thread->thread_cat_id = $id; // Use the provided category ID
                $thread->thread_user_id = Auth::id(); // Get authenticated user's ID
            
                // Save the thread
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
                // Retrieve all input data from the request
                $requestData = $request->all();
                // dd($requestData);
                $hotels = hotels::where('hotel_id', $id)->first();
                // Extract individual input values
                $checkinDate = $requestData['checkin'] ?? null;
                $checkoutDate = $requestData['checkout'] ?? null;
                $hotelId = $id;
                $userId = auth()->id(); // Assuming you are using Laravel's built-in authentication
                $name = $hotels->hotels_name;
                $price = $requestData['totalPrice'] ?? null ;
                $image = $hotels->hotels_image_path;
                $status = "1";
                
                // Create a new instance of the Booked model
                $booking = new Book();
                
                // Set the attributes of the booking
                $booking->checkin_date = $checkinDate;
                $booking->checkout_date = $checkoutDate;
                $booking->hotel_id = $hotelId;
                $booking->user_id = $userId;
                $booking->name = $name;
                $booking->price = $price;
                $booking->hotel_image_path = $image;
                $booking->status = $status;
                
                // Save the booking details to the database
                $booking->save();
                
                // Flash the success message
                $booking = Book::all();
                $alert = ['success' => 'Your hotel booked'];
                $data = compact('alert', 'citys','booking');
                // Storing the alert message in session flash
                $request->session()->flash('alert', $alert);
                
               

                // Redirect the user to the index page or any other appropriate page
                return view('index')->with($data);
            }

            public function list(){
                $citys = citys::all();
                $user = User::all();
                $booking = Book::all();
                $data = compact('citys', 'booking','user');
                return view('list')->with($data);
            }
            
            
            
}
