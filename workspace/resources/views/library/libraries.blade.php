@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
                <div class="col-md-2">
                    <ul class="nav nav-pills nav-stacked">
                        <li role="presentation" class="active" ><a href="{{ url('/library') }}">Create Library</a></li>
                        <li role="presentation"><a href="{{ url('/addBook') }}">Add Book</a></li>
                        <li role="presentation"><a  href="{{ url('/Search') }}">Search For Book</a></li>
                        <li role="presentation" ><a href="{{ url('/memberships') }}">Memberships</a></li>
                        <li role="presentation"><a  href="{{ url('/adminPage') }}">Admin Page</a></li>

                    </ul>
                </div>
                
        
        
        <div class="col-md-10">
            
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
        
            <div class="panel panel-default">
                <div class="panel-heading">Create new Library</div>
                    <div class="panel-body">
                        <table class="table" >
                            {!! Form::open(["url"=>"/library/store"]) !!}
                            {!! Form::hidden('username',$username) !!}
                            <td><h4>library Name : </h4></td>
                            <td>{!! Form::text("library_name","",["class"=>"form-control"]) !!}</td>
                            <td>{!! Form::submit("Add",["class"=>"btn btn-success"]) !!}</td>
                            {!! Form::close() !!}
                      </table> 
                    </div>
                </div>
            </div>
            
                               
    </div>

@endsection




         
