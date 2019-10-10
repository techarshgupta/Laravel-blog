@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-default">Go back</a>
<h1>{{$post->title}}</h1>
<img src="/storage/cover_images/{{ $post->cover_image }}" style="width:100%"/>
<div>
  {{$post->body}}
</div>
<hr />
<small>Written on {{$post->created_at}}</small>
<hr />
  @if (!Auth::guest())
    @if (Auth::user()->id === $post->user_id)
      <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a>
      {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=> 'Delete', 'class'=>'text-right'])!!}
      {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
      {!!Form::close()!!}
    @endif
  @endif
@endsection