@extends('master')
@section('title','show post')
	

@section('content')
	@include('errors')
	<h3>post Title</h3>
	<p>{{$post->title}}</p>
	<h3>post Body</h3>
	<p>{{$post->body}}</p>

	<hr>
	<h3>Comments:</h3>
	<div class="comments">
		<ul>
			@foreach($post->comments as $comment)
				<li class="list-group-item">
					<strong>
						{{ $comment->created_at->diffForHumans() }} 
					</strong>
					{{$comment->body}}<br>
					<a href="#">Delete</a>
					<a href="#">Edit</a> 
				</li>

			@endforeach
		</ul>
	</div>

  {{-- add comment --}}
<div class="card">
  <div class="card-block">
   	{!! Form::open(['url'=>'/posts/'.$post->id.'/comments','method'=>'post'])!!}
		{{ csrf_field() }}
    	<div class="form-group">
    		<textarea name="body" placeholder="Your comment here..."   class="form-control"></textarea>
    	</div>
    	<div class="form-group">
    		<button type="submit" class="btn btn-primary">Add Comment</button>
    	</div>
   
  </div>
</div>


	
@stop