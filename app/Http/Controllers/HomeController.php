<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;use App\Quote;
use Auth;
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
