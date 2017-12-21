@extends('layouts.app')

@section('content')
        <h1>add traines</h1>
	{{ Form::open(['action' => 'Tearscontroller@store', 'method' => 'POST']) }}
    {{Form::label('title','student')}}
	{{Form::text('trea_title','')}}
    <br>
        @foreach($posts as $post )
                
                
   <input type="checkbox" name="post[]" value="{{$post->posts_id }}"> {{$post->posts_title}}<br>
            @endforeach
	{{Form::submit('submit')}}
	{{ Form::close() }}

@endsection