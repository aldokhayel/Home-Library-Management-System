@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
                <div class="col-md-2">
                    <ul class="nav nav-pills nav-stacked">
                        <li role="presentation"  ><a href="{{ url('/adminPage') }}">Admin page</a></li>
                        <li role="presentation"  class="active"><a href="{{ url('/editLibrary') }}">Edit Library</a></li>
                        <li role="presentation"><a href="{{ url('/editBook') }}">Edit Book</a></li>

                    </ul>
                </div>
                
                
                <div class="col-md-10">
       
       <div class="panel panel-default">
                <div class="panel-heading">Edit Library</div>
                    <div class="panel-body">
                        Welcome in Edit Library!
                    </div>
                </div>

            <div class="panel panel-primary">
              <div class="panel-heading">Libraries</div>
                    @foreach($libraries as $library )
                         
             <table class="table table-striped table-hover statistic-table">
                            <tr>
                            {!! Form::open(["url"=>"/library/$library->id","method"=>"patch"]) !!}
                            <tr>
                            <td><h4>{{ Form::text('name',$library->name,["class"=>"form-control"])}}</h4></td>
                            <td><a style="float:right; margin-left:500px;">{!! Form::submit("Update",["class"=>"btn btn-success"]) !!}</a></td>
                            {!! Form::close() !!}
                            
                            {!! Form::open(["url"=>"/library/$library->id","method"=>"delete"]) !!}
                            <td><a >{!! Form::submit("Remove",["class"=>"btn btn-danger"]) !!}</a></td>
                            </tr>
                            {!! Form::close() !!}
                            </tr> 
                      </table>
                    @endforeach
                </div>
     
     
     
         </div>
     </div>           
</div>                
                
                
@stop