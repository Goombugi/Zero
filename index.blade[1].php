@extends('layouts.app')
@section('content')
<h1>Requests </h1>

@if(count($reqest) > 1)
    @foreach($request as $request)
        <div class="well">
            <h3><a href="/requests/{{$request->$id}}">{{$reqest->name}}</a></h3>
            <small> Create on {{$request->created_at}}</small>
        </div>
    @endforeach
    {{$request->link()}}
@else
<p> No Request Founrd! </p>

@endsection 
