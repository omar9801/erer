@extends('layouts.app')

@section('content')
        <h1>add courses</h1>
	{{ Form::open(['action' => 'Postscontroller@store', 'method' => 'POST']) }}
    {{Form::label('title','Title')}}
	{{Form::text('posts_title','')}}
  <br>
       @foreach($tears as $tear )
    
       <input type="checkbox" name="tear[]" value="{{$tear->tears_id}}"> {{$tear->tears_title}}<br>            

            @endforeach

	{{Form::submit('submit')}}
	{{ Form::close() }}

@endsection