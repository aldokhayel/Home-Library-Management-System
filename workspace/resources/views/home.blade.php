@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
                <div class="col-md-2">
                    <ul class="nav nav-pills nav-stacked">
                        <li role="presentation"><a href="{{ url('/library') }}">Create Library</a></li>
                        <li role="presentation"><a href="{{ url('/addBook') }}">Add Book</a></li>
                        <li role="presentation"><a  href="{{ url('/Search') }}">Search For Book</a></li>
                        <li role="presentation" ><a href="{{ url('/memberships') }}">Memberships</a></li>
                        <li role="presentation"><a  href="{{ url('/adminPage') }}">Admin Page</a></li>
                        
                    </ul>
                </div>
                
         
                
    
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                    <div class="panel-body">
                        Welcome in Dashboard!
                    </div>
                </div>


           <div class="panel panel-primary">
                <div class="panel-heading">Search For Book</div>
                <div class="panel-body">
          <table class="table" >
                {!! Form::open(["method"=>"GET","url"=>"/Search","role"=>"search"]) !!}
                <td>Enter the Book Name : </td>
                <td>{!! Form::text('search', null,
                           array('required',
                                'class'=>'form-control',
                                'placeholder'=>'Search for a book...')) !!}</td>
                <td>{!! Form::submit("Search",["class"=>"btn btn-success"]) !!}</td>
                {!! Form::close() !!}
          </table> 
                </div>
            </div>


      <div class="panel panel-primary">
                <div class="panel-heading">Libraries</div>
                    <table class="table table-striped table-hover statistic-table">
                            <tr>
                            <th><h4>Library Name</h4></th>
                            <th><h4>Owner Name</h4></th>
                            </tr>
                            @foreach($libraries as $library )
                            {!! Form::open(["url"=>"/memberships/store"]) !!}
                            {!! Form::hidden('username',$username) !!}
                            {!! Form::hidden('owner_username',$library->owner_username) !!}
                            {!! Form::hidden('id',$library->id) !!}
                            <tr>
                            <td><h4>{!! Form::text('library_name',$library->name,["class"=>"form-control"]) !!}</h4></td>
                            <td><h4>{!! Form::text('owner_username',$library->owner_username,["class"=>"form-control"]) !!}</h4></td>
                            <td><a style="float:right; margin-left:400px;">{!! Form::submit("Request",["class"=>"btn btn-success"]) !!}</a></td>
                            {!! Form::close() !!}
                            </tr>
                           @endforeach
                            
                    </table>
                </div>
        
                
                
         
    </div>
</div>
</div>


              
        
@endsection
