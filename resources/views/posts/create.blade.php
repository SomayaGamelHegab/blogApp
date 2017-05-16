@extends('master')
@section('title','Create post')
@section('content')
	@include('errors')
	{!! Form::open(['route'=>'posts.store','method'=>'post'])!!}
		{{ csrf_field() }}
		<div class="form-group">
		    <label for="title">Post Title</label>
		    <input type="text" class="form-control" id="title" name="title"  placeholder="Enter Title" >
		    
	    </div>
	  
	    <div class="form-group">
		    <label for="body">Post Body</label>
		    <textarea class="form-control" id="body" name="body" rows="3" ></textarea>
		</div>
		 
		 <div class="form-group" >

	    <button type="submit" class="btn btn-primary">Post</button>
	    </div>

	    
   
	{!! Form::close() !!}


	
@stop