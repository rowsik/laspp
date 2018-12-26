
@extends('layouts.app')

@section('title','Services')

@section('content')
        <h1>Service</h1>
        <p>Our services inlcudes </p>

	
        @if(count($services)>0)
	        <ul class="list-group">
	        	@foreach($services as $service)
	        		<li class="list-group-item">{{$service}}</li>
	        	@endforeach
	        </ul> 
	     @endif
@endsection