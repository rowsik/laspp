 @extends('layouts.app')

 @section('title','Create')

 @section('content')
 	<h1>Create Posts </h1>
 		{!! Form::open(['action' => 'PostsController@store','method'=>'POST','enctype'=>'multipart/data']) !!}
			{{ Form::label('title','Title:')}}
			{{ Form::text('title',null,array('class'=>'form-control','required'=>'')) }}


			{{Form::label('body','Post Body:')}}
			{{Form::textarea('body',null,array('class'=>'form-control','id'=>'article-ckeditor','required'=>'')) }}
			<div class="form-group">
				{{Form::file('cover_image')}}
				
			</div>

			{{Form::submit('Create Post',array('class'=> 'btn btn-success btn-lg btn-block','style'=> 'margin-top:20px')) }}
				
    
		{!! Form::close() !!}
 	
 	
 @endsection