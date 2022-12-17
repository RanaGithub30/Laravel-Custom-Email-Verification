@extends('commons.header')
@section('contents')

<h1>Welcome : {{Auth::user()->name}} </h1>
<center><a href="{{url('logout')}}" class="btn btn-primary">Logout</a></center>

@endsection