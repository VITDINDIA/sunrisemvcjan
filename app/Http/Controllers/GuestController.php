<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Msg;
use App\Quote;
use Illuminate\Support\Facades\Cache;
use App\Events\EmailEvent;
class GuestController extends Controller
{
    //
    public function contactSubmit(Request $request)
    {
        $request->validate([
        'name' => 'required | max:15 ', 'contact' => 'required | min:10 | max:10',
        ]);
        
        $data = array('msg'=>$request['query'], $request['contact']);
        Session(['data' =>$data, ]);
        event(new EmailEvent());
        
         Msg::create(['msg' => $request['query'], 'contact' =>  $request['contact'], 
        'guest_name' =>  $request['name'] ]);
        return Redirect()->route('contact')->with(['success' => 'Contact Submit Successfully',]);
    }
    public function index()
    {
        
      return view('welcome',['data' => Cache('indexquote'), ]);  
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
