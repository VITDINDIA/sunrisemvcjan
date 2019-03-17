<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Msg;
use App\Quote;
class GuestController extends Controller
{
    //
    public function contactSubmit(Request $request)
    {
        $request->validate([
        'name' => 'required | max:15 ', 'contact' => 'required | min:10 | max:10',
        ]);
         Msg::create(['msg' => $request['query'], 'contact' =>  $request['contact'], 
        'guest_name' =>  $request['name'] ]);
        return Redirect()->route('contact')->with(['success' => 'Contact Submit Successfully',]);
    }
    public function index()
    {
        
      return view('welcome',['data' => Quote::where('block',0)->orderBy('id','DESC')->get()->take(9), ]);  
    }
    public function contact()
    {
        return view('contact');
    }
    
    
    public function getAuthors()
    {
        $data=User::all();
        return View('AuthorReport',['data' =>$data, ]);
    }
    
    public function freshQuote()
    {
        return Quote::orderBy('id','DESC')->first();
    }
}
