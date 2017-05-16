@extends('master')
@section('title','List posts')


@section('content')
	<table class="table">
	  <thead>
	    <tr>
	      
	      <th>Title</th>
	      <th>Body</th>
	      <th>Actions</th>
	    </tr>
	  </thead>
	  <tbody>
	   	@foreach ($posts as $post)
	     
	     <tr>
	     	<td>{{ $post->title }}</td>
	     	<td>{{ $post->body }}</td>
	     	<td>
	     	
	     	{!! Form::open(['method' => 'DELETE', 'route' => ['posts.destroy', $post->id]]) !!}
    		{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
			{!! Form::close() !!}
			<a class="btn btn-primary" href="/posts/{{$post->id}}" role="button">Show</a><br>
	     	<a class="btn btn-success" href="/posts/{{$post->id}}/edit" role="button">Update</a>
	     	</td>
	     </tr>
	@endforeach
	  </tbody>
	</table>
@stop