<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class adminPageController extends Controller
{
    //
    public function index()
    {
        $username = \Auth::user()->username;
        $libraries=DB::table('libraries')->where('owner_username','like',$username)->get();
        $books=DB::table('books')->where('book_owner','like',$username)->get();

        return view('adminPage')->withlibraries($libraries)->withbooks($books);
    }
}
