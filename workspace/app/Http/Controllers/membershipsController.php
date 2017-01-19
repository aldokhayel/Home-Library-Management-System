<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Membership;
use DB;
use Response;

class membershipsController extends Controller
{
     public function index()
    {
      
        
        $username = \Auth::user()->username;
        $memberships=DB::table('memberships')->where('owner_username','like',$username)->get();
        $memberships2=DB::table('memberships')->where('username','like',$username)->where('friend','=','1')->get();
        $memberships3=DB::table('memberships')->where('username','like',$username)->where('friend','=','1')->value('library_name');

        //$books=DB::table('books')->where('library_name','like',$memberships3)->get();


        return view('memberships')->with('username',$username)->withMemberships($memberships)->withMemberships2($memberships2);
        //->withBooks($books);
        
    }
    


    public function store(Request $request)
    {
      
        if(!is_null($request)){
            
            //$username = \Auth::user()->username;
            
            //Library::find($id);
            // $id=$request->id;
            // $libraries=DB::table('libraries')->where('id','=',$id)->get();
            // $libraries->request=1;
            
            $username = $request->username;
            $library_name=$request->get('library_name');
            $owner_username=$request->owner_username;
            
            $new_membership=new Membership;
        
            $new_membership->username=$username;
            $new_membership->owner_username=$owner_username;
            $new_membership->library_name=$library_name;
            $new_membership->friend=0;
            $new_membership->save();

            return back();       
            
        }else{
            return redirect('/memberships');
        }

    }
    
    public function accept(Request $request)
    {
      
        if(!is_null($request)){

            $id=$request->id;

            $new_membership=Membership::find($id);
            $new_membership->friend=1;
            $new_membership->save();

            return back();       
            
        }else{
            return redirect('/memberships');
        }

    }

    
     public function destroy($id)
    {
        //
        Membership::destroy($id);
        return back();
    }
}
