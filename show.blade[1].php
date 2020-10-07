@extends('layouts.app')
@section('content')

<a href="/request" class="btn btn-default">Go Back </a>

<h1>{{$request->name }} </h1>

        <div class="well">
           
            {{$request->description}}
        </div>
 <hr>
  <small> Create on {{$request->created_at}}</small>
@endsection 
