<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Library;
use DB;
use Auth;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Authenticatable;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $username = \Auth::user()->username;
        //$users=DB::table('users')->get();
        //$books=DB::table('books')->where('book_owner','like',$username)->get();
        //$libraries=DB::table('libraries')->where('owner_username','!=',$username)->get();
        //->where('owner_username','=',$owner_username)
        //$memberships=DB::table('memberships')->value('library_name');
        //$owner_username=DB::table('memberships')->value('owner_username');

        $libraries=DB::table('libraries')->where('owner_username','!=',$username)->where('request','=','0')->get();

        return view('home')->with('username',$username)->withlibraries($libraries);
    }
    
    public function search($name)
    {
        $username = \Auth::user()->username;
        if(!is_null($name)){
  	    $books = DB::table('books')->where('book_title','=',$name)->withusere($username)->get();

        //if (count($books) == 0){
            return view('home')->withBooks($books);
        }
         else{
            return view('home')->with('username',$username);             
         }
               
  
    }
}
