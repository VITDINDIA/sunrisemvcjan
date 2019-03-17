<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Quote;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth', 'authadmintype']);
    }
    public function index()
    {
        return View('admin',['data' => Quote::where('block',1)->orderBy('id','DESC')->get(), ]);
    }
    public function allowQuote($id)
    {
        $data=Quote::find($id);
        $data->block=0;
        $data->save();
        return Redirect()->route('admin_home');
    }
}
