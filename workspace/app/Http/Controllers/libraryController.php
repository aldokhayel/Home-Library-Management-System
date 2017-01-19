<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Library;
use DB;
use Validator;
use App\Http\Controllers\Controller;
use Response;


class libraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $username = \Auth::user()->username;
        return view('library.libraries')->with('username',$username);
        
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
      
      $this->validate($request,['library_name'=>'required|max:30']);

        if(!is_null($request)){
            
            $library_name = $request->library_name;
            $username = $request->username;
            
            
            $new_library = new Library;
            
            $new_library->name = $library_name;
            $new_library->owner_username = $username;

            $new_library->save();
            
            session()->push('m','success');
            session()->push('m','Library Added successfuly');

            return back();
        }else{
            return redirect('/library');
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
        $all_books=$library->books;
        return view("addbooks",compact('library',$library,'all_books',$all_books));
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
        $library_name = $request->input('name');
        $library = library::find($id);
        $library->name = $library_name;
        $library->save();
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
        library::destroy($id);
        return back();

    }
}
