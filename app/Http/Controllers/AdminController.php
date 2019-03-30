<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Quote;
use Illuminate\Support\Facades\Cache;
class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth', 'authadmintype']);
    }
    public function index()
    {
        return View('admin',['data' => Quote::where('block',1)->orderBy('id','DESC')->paginate(3), ]);
    }
    public function allowQuote($id)
    {
        $data=Quote::find($id);
        $data->block=0;
        $data->save();
        
        Cache::forever('indexquote',Quote::where('block',0)->orderBy('id','DESC')->get()->take(9));
        
        return Redirect()->route('admin_home');
    }
}
