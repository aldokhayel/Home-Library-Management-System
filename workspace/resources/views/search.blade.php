@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
                <div class="col-md-2">
                    <ul class="nav nav-pills nav-stacked">
                        <li role="presentation"><a href="{{ url('/library') }}">Create Library</a></li>
                        <li role="presentation"><a href="{{ url('/addBook') }}">Add Book</a></li>
                        <li role="presentation" class="active"><a href="{{ url('/Search') }}">Search For Book</a></li>
                        <li role="presentation" ><a href="{{ url('/memberships') }}">Memberships</a></li>
                        <li role="presentation"><a  href="{{ url('/adminPage') }}">Admin Page</a></li>

                    </ul>
                </div>
                
    
        <div class="col-md-10">
            
      
      
        <div class="panel panel-default">
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
         <div class="panel-heading">Book List</div>
         <div class="panel-body">
             <table class="table table-striped table-hover statistic-table">
                <tr class="info">
                    <th>Book Title</th>
                    <th>Book Author</th>
                    <th>Library Name</th>
                </tr>
                <tr>
                    @if (count($books) == 0)
                    <td>There is no book that matches the search criteria.</td>
                    @elseif (count($books) >= 1)
                    @foreach($books as $book)
                    <td>{{$book->book_title}}</td>
                    <td>{{$book->book_author}}</td>
                    <td>{{$book->library_name}}</td>
                </tr>
                @endforeach
                @endif
            </table>
            
            
           
            
            
            
            
            
            
         </div>
    </div>

@endsection




         
