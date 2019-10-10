@extends('layouts.app')

@section('content')
<h1>Create post</h1>
{!! Form::open(['action' => ['PostsController@update', $post->id], 'method'=>'PUT', 'enctype'=>'multipart/form-data']) !!}
<div class="form-group">
    {{Form::label('title', 'Title')}}
    {{Form::text('title', $post->title, ['class'=>'form-control', 'placeholder'=>'Enter the blog Title'])}}
</div>
<div class="form-group">
    {{Form::label('body', 'Body')}}
    {{Form::textarea('body', $post->body, ['class'=>'form-control', 'placeholder'=>'Enter the blog Body'])}}
</div>
<div class="form-group">
    {{Form::label('cover_image', 'File Upload')}}
    {{Form::file('cover_image')}}
</div>
{{ Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection
