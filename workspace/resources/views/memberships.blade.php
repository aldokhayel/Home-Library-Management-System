@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
                <div class="col-md-2">
                    <ul class="nav nav-pills nav-stacked">
                        <li role="presentation"><a href="{{ url('/library') }}">Create Library</a></li>
                        <li role="presentation"><a href="{{ url('/addBook') }}">Add Book</a></li>
                        <li role="presentation"><a  href="{{ url('/Search') }}">Search For Book</a></li>
                        <li role="presentation" class="active"><a href="{{ url('/memberships') }}">Memberships</a></li>
                        <li role="presentation"><a  href="{{ url('/adminPage') }}">Admin Page</a></li>
                    </ul>
                </div>
                
                
    <div class="col-md-10">
        <div class="panel panel-primary">
            <div class="panel-heading">Requests</div>
                    <table class="table table-striped table-hover statistic-table">
                            <tr>
                            <th><h4>Requester Name</h4></th>
                            <th><h4>Library Name</h4></th>
                            </tr>
                        @foreach($memberships as $membership)
                                @if($membership->friend==0)
                            {!! Form::open(["url"=>"/memberships/accept"]) !!}
                            {!! Form::hidden('id',$membership->id)!!}
                            <tr>
                            <td><h4>{!! Form::text('username',$membership->username,["class"=>"form-control"]) !!}</h4></td>
                            <td><h4>{!! Form::text('library_name',$membership->library_name,["class"=>"form-control"]) !!}</h4></td>
                            <td><a style="float:right; margin-left:400px;">{!! Form::submit("Accept",["class"=>"btn btn-success"]) !!}</a></td>
                            {!! Form::close() !!}
                            
                            {!! Form::open(["url"=>"/memberships/$membership->id","method"=>"delete"]) !!}
                            <td><a >{!! Form::submit("Reject",["class"=>"btn btn-danger"]) !!}</a></td>
                            </tr>
                            {!! Form::close() !!}
                            @endif
                        @endforeach

                        </table>
            </div>
        
        
        <div class="panel panel-primary">
            <div class="panel-heading">Friends</div>
                         <table class="table table-striped table-hover statistic-table">
                            <tr>
                            <th><h4>Friend Name</h4></th>
                            <th><h4>Library Name</h4></th>
                            </tr>
                            <tr>
                             @foreach($memberships as $membership)
                             @if($membership->friend==1)
                            {!! Form::open(["url"=>"/memberships/$membership->id","method"=>"delete"]) !!}
                            {!! Form::hidden('id',$membership->id)!!}
                            <td><h4>{!! Form::text('username',$membership->username,["class"=>"form-control"]) !!}</h4></td>
                            <td><h4>{!! Form::text('library_name',$membership->library_name,["class"=>"form-control"]) !!}</h4></td>
                            <td><a style="float:right; margin-left:400px;">{!! Form::submit("Remove",["class"=>"btn btn-danger"]) !!}</a></td>
                            {!! Form::close() !!}
                            </tr>
                            @endif
                            @endforeach

                        </table>
                </div>
        
        
         <div class="panel panel-primary">
                <div class="panel-heading">Libraries</div>
                    <table class="table table-striped table-hover statistic-table">
                        <tr>
                            <th><h4>Library Name</h4></th>
                            <th><h4>Friend Name</h4></th>
                        </tr>
                            @foreach($memberships2 as $membership2 )
                            <tr>
                            {!! Form::open(["url"=>"/memberships/$membership2->id","method"=>"delete"]) !!}
                            {!! Form::hidden('id',$membership2->id)!!}
                            <td><h4>{{ $membership2->library_name,["class"=>"form-control"]}}</h4></td>
                            <td><h4>{{ $membership2->owner_username,["class"=>"form-control"]}}</h4></td>
                            <td><a style="float:right; margin-left:400px;">{!! Form::submit("Remove",["class"=>"btn btn-danger"]) !!}</a></td>
                            {!! Form::close() !!}

                        </tr>
                    </table>
                    @endforeach
                </div>
                
                
          
                
                
            
        </div>
    </div>
</div>
@stop