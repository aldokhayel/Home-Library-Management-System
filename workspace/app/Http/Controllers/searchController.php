<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Validator;
use Response;

class searchController extends Controller
{
    
     public function index() {
        
        $search = \Request::get('search'); //<-- we use global request to get the param of URI
        $username = \Auth::user()->username;

        if($search!=NULL){
        $books = DB::table('books')->where('book_owner','like',$username)->where('book_title','like','%'.$search.'%')->paginate(20);
        return view('search',compact('books'));
        }
        else{
        $books=NULL;
        return view('search')->withbooks($books);
        }

         
        //$username = \Auth::user()->username;
        //$books=DB::table('books')->get();
        //return view('search')->with('username',$username)->withbooks($books);             
    }
}
