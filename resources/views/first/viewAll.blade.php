@extends('layouts.app')
@section('content')

@foreach($allPosts as $onepost)
	<div class = "navbar navbar-default">
	<a class="pull-right" href="{{ route('post.edit', $onepost->id)}}" >Edit</a>
	<ul>
	   <li>
			{!! $onepost->title !!} <br>
			{!! $onepost->body !!} <br>
		</li>
	</ul>
	</div>
@endforeach()
@endsection