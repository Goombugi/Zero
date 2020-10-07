@extends('layouts.app')
@section('content')
<h1>{{$title}}:</h1>
<div class="container">
<form method="POST" action="">
                        @csrf
                        
                        <input id="number" type="number" name="number" value="{{ old('number') }}" required autocomplete="number" placeholder="Number">
                        <input id="date" type="text" name="date" value="{{ old('date') }}" required autocomplete="date" placeholder="Date">
                        <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Name">
                        <input id="amount" type="number" name="amount" value="{{ old('amount') }}" required autocomplete="amount" placeholder="Amount">
                        <input id="description" type="text" name="description" value="{{ old('description') }}" required autocomplete="description" placeholder="Description">
                        <input id="type" type="text" name="type" value="{{ old('type') }}" required autocomplete="type" placeholder="Payment Type">
                        <input id="cheque_id" type="number" name="cheque_id" value="{{ old('cheque_id') }}"  autocomplete="cheque_id" placeholder="Cheque ID">
                        <input id="bank_name" type="text" name="bank_name" value="{{ old('bank_name') }}"  autocomplete="bank_name" placeholder="Bank Name">
                        <input id="received_by" type="text" name="received_by" value="{{ old('received_by') }}" required autocomplete="received_by" placeholder="Recieved By">
                        <input id="national_id" type="number" name="national_id" value="{{ old('national_id') }}" required autocomplete="national_id" placeholder="National ID">
                        <input id="user_id" type="number" name="user_id" value="{{ old('user_id') }}" required autocomplete="user_id" placeholder="User ID">


<button type="submit" >     {{ __('Submit') }} </button>
</form>
</div>
@endsection
