@extends('layouts.app')

@section('content')
        <h1>edit tear</h1>
               <h1>{{$tears->tears_title}}</h1>
	
    {{ Form::open(['action' => ['Tearscontroller@update',$tears->tears_id], 'method' => 'POST']) }}
    {{Form::label('title','studint')}}
    <br><br>
	{{Form::text('tears_title',$tears->tears_title)}}
    <br>
    
    @foreach($posts as $post )
                
         <input type="checkbox" name="post[]" value="{{$post->posts_id }}"> {{$post->posts_title}}<br>
            
            

            @endforeach
    {{Form::hidden('_method','PUT')}}
    <br> <br>
	{{Form::submit('submit')}}
	{{ Form::close() }}
	
@endsection