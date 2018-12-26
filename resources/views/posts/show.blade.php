 @extends('layouts.app')

 @section('title','View')

 @section('content')
 	<a href="/posts" class="btn btn-default btn-success">Go Back</a>
 	<h1>{{$post->title}}</h1>
 		<div>
 		<h2>{!!$post->body!!}</h2>
 		</div>
 		<hr>
 		
 			

 		<small>Written on {{$post->created_at}} by {{$post->user['name']}}</small>
 		<hr>
 		@if(!Auth::guest())
 		 @if(Auth::user()->id == $post->user_id)
 		<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

 		{!! Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'pull-right'])!!}
 			{{Form::hidden('_method','DELETE')}}
 			{{Form::Submit('Delete',['class'=>'btn btn-danger'])}}

 			{!!Form::close()!!}
 			@endif
 		@endif
 @endsection