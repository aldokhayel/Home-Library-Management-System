@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
                <div class="col-md-2">
                    <ul class="nav nav-pills nav-stacked">
                        <li role="presentation" class="active" ><a href="{{ url('/adminPage') }}">Admin page</a></li>
                        <li role="presentation"><a href="{{ url('/editLibrary') }}">Edit Library</a></li>
                        <li role="presentation"><a href="{{ url('/editBook') }}">Edit Book</a></li>

                    </ul>
                </div>
    
   <div class="col-md-10">
       
         <div class="panel panel-default">
                <div class="panel-heading">Admin Page</div>
                    <div class="panel-body">
                        Welcome in Admin Page!
                    </div>
                </div>
                
                
            <div class="panel panel-primary">
                <div class="panel-heading">Libraries</div>
                    @foreach($libraries as $library )
                    <table class="table table-striped table-hover statistic-table">
                            <tr>
                            {!! Form::open(["url"=>"/library/$library->id"]) !!}
                            <tr>
                            <td><h4>{{ $library->name,["class"=>"form-control"]}}</h4></td>
                            {!! Form::close() !!}
                    </table>
                    @endforeach
                </div>
                
       <div class="panel panel-primary">
            <div class="panel-heading">Books</div>
             <table class="table table-striped table-hover statistic-table">
                <tr class="success">
                    <th><h4>Book Title</h4></th>
                    <th><h4>Book author</h4></th>
                    <th><h4>Library</h4></th>
                </tr>
                    @foreach($books as $book )
                            {!! Form::open(["url"=>"/book/$book->id"]) !!}
                            <tr>
                            <td><h4>{{ $book->book_title,["class"=>"form-control"]}}</h4></td>
                            <td><h4>{{ $book->book_author,["class"=>"form-control"]}}</h4></td>
                            <td><h4>{{ $book->library_name,["class"=>"form-control"]}}</h4></td>
                            {!! Form::close() !!}
                        </tr> 
                    @endforeach
                </table>
               </div>

        </div>
    </div>
</div>

@stop