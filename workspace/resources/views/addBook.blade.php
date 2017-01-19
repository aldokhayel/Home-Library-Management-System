@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
                <div class="col-md-2">
                    <ul class="nav nav-pills nav-stacked">
                        <li role="presentation"><a href="{{ url('/library') }}">Create Library</a></li>
                        <li role="presentation" class="active" ><a href="/addBook">Add Book</a></li>
                        <li role="presentation"><a  href="{{ url('/Search') }}">Search For Book</a></li>
                        <li role="presentation"><a href="{{ url('/memberships') }}">Memberships</a></li>
                        <li role="presentation"><a  href="{{ url('/adminPage') }}">Admin Page</a></li>

                    </ul>
                </div>
                
    

           
        
      
      
        
        
        <div class="col-md-10">
            <div class="panel panel-default">
              
                
                
                <div class="panel-heading">Add Book</div>
                    <div class="panel-body">
                        
                           @if(count($errors)>0)
            <div class='alert alert-danger'>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>    
            </div>
        @endif
        
          @if(Session::has('m'))
            <?php $a=[]; $a=session()->pull('m'); ?>
            <div class="alert alert-{{ $a[0] }}">
                <ul>
                    <li>{{ $a[1] }}</li>
                </ul>    
            </div>
            @endif
                        
                        
                        
                        <table class="table" >
                             <tr>
                            {!! Form::open(["url"=>"/addBook/store"]) !!}
                            {!! Form::hidden('username',$username) !!}
                            <td><h4>Book Title : </h4></td>
                            <td>{!! Form::text("book_title","",["class"=>"form-control"]) !!}</td>
                            <td><h4>Book Author: </h4></td>
                            <td>{!! Form::text("book_author","",["class"=>"form-control"]) !!}</td>
                            </tr>
                            <tr>
                            <td><h4>Library Name : </h4></td>
                            <td>
                                <div class="col-md-20">
                                        <select id="library_name"  class="form-control" name="library_name">
                                            <option value="library_name"  class="dropdown-header" >Select Library...</option>
                                            @foreach($libraries as $library)
                                            <option value="{{$library->name}}" >
                                            {{$library->name}}
                                            </option>
                                            @endforeach
                                        </select>
                                </div>
                            </td>
                            <td>{!! Form::submit("Add",["class"=>"btn btn-success"]) !!}</td>
                            {!! Form::close() !!}
                            </tr>
                        </table> 
                    </div>
                </div>
            </div>


                </div>
            </div>

                            
@endsection




         
