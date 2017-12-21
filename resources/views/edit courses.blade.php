@extends('layouts.app')

@section('content')
        <h1>edit courses</h1>
               <h1>{{$posts->posts_title}}</h1>
	{{ Form::open(['action' => ['Postscontroller@update',$posts->posts_id], 'method' => 'POST']) }}
    {{Form::label('title','Title')}}
    <br><br>
	{{Form::text('posts_title',$posts->posts_title)}}
    <br>
    <br>
       @foreach($tears as $tear )
                
                <input type="checkbox" name="tear[]" value="{{$tear->tears_id}}"> {{$tear->tears_title}}<br>

            @endforeach
    {{Form::hidden('_method','PUT')}}
    <br> 
	{{Form::submit('submit')}}
	{{ Form::close() }}
	
@endsection