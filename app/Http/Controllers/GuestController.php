<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    //
    public function index()
    {
      return view('welcome');  
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
    
}
