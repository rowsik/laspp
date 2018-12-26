 @extends('layouts.app')

 @section('title','Create')

 @section('content')
 	<h1>Edit Post</h1>
 		{!! Form::open(['action' => ['PostsController@update',$post->id],'method'=>'POST']) !!}
			{{ Form::label('title','Title:')}}
			{{ Form::text('title',$post->title,array('class'=>'form-control','required'=>'')) }}


			{{Form::label('body','Post Body:')}}
			{{Form::textarea('body',$post->body,array('class'=>'form-control','id'=>'article-ckeditor','required'=>'')) }}


			{{Form::hidden('_method','PUT')}}
			{{Form::submit('Update',array('class'=> 'btn btn-success btn-lg btn-block','style'=> 'margin-top:20px')) }}
    
		{!! Form::close() !!}
 	
 	
 @endsection