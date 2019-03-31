<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;use App\Quote;
use Auth;use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['authtype','auth']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function postphoto(Request $request)
    {
        $request->validate([
            'file' => 'max:500',
                           ]);                  
        $image=$request->file('file');
        $input['imagename']=time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('images/authors/');
        
        $image->move($destinationPath,$input['imagename']);
        $getUserRow=User::find(Auth::user()->id);
        $getUserRow->photopath=$input['imagename'];
        $getUserRow->save();
        return redirect()->route('post_quote');  
    } 
    public function index()
    {
        return view('home');
    }
    public function postQuote()
    { 
        return view('create_quotes',['data' => Category::all(), ]);
    }
    public function submitQuote(Request $request)
    {
       Quote::create([ 'quote' => $request->quote, 'refauthor' => $request->author,'category_id' => $request->category ,'user_id' =>Auth::user()->id ]);
        return Redirect()->route('post_quote')->with(['success' => 'Quote Created Successfully', ]);
    }
}
