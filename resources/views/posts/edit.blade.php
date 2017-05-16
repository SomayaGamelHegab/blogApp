@extends('master')
@section('title','update post')

@section('content')
	
		{!!Form::open(array('route' => array('posts.update', $post->id),'method'=>'put'))!!}
		{{ csrf_field() }}
		<div class="form-group">
		    <label for="title">Post Title</label>
		    <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
		    
	    </div>
	  
	    <div class="form-group">
		    <label for="body">Post Body</label>
		    <textarea class="form-control" id="body" name="body" rows="3">{{$post->body}}</textarea>
		</div>
		 

	    <button type="submit" class="btn btn-primary">Update</button>
   
	{!! Form::close() !!}
	
@stop