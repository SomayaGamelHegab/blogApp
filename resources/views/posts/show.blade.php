@extends('master')
@section('title','show post')
	

@section('content')
	<h3>post Title</h3>
	<p>{{$post->title}}</p>
	<h3>post Body</h3>
	<p>{{$post->body}}</p>

	
@stop