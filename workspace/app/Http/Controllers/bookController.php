<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;
use App\book;
use DB;
use Validator;
use App\Http\Controllers\Controller;
use Response;
use Input;

class bookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $username = \Auth::user()->username;
        $libraries=DB::table('libraries')->where('owner_username','like',$username)->get();
        return view('addBook')->with('username',$username)->withlibraries($libraries);
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request,['book_title'=>'required|max:30','book_author'=>'required|max:30']);


        if(!is_null($request)){
            $book_author = $request->book_author;
            $book_title = $request->book_title;
            $library_name = $request->get('library_name');
            $username = $request->username;

            $new_book = new book;
            
            $new_book->book_title = $book_title;
            $new_book->book_author = $book_author;
            $new_book->book_owner = $username;
            $new_book->library_name = $library_name;
            
            session()->push('m','success');
            session()->push('m','Book Added successfuly');

            $new_book->save();
            return back();
        }else{ 
            return redirect('/addBook');
        }
      
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $book_title=$request->input('book_title');
        $book=book::find($id);
        $book->book_title=$book_title;
        $book->save();
        return back();
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        book::destroy($id);
        return back();
    }
}
