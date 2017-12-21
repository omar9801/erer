@extends('layouts.app')

@section('content')
        <a href="/courses">go back</a>
        <h1>{{$posts->posts_title}}</h1>
            
                     {{$posts->Tears->count()}}
                  
        
                     
        <a href="/courses/{{$posts->posts_id}}/edit">edit cours name</a>
            
    {{ Form::open(['action' => ['Postscontroller@destroy',$posts->posts_id], 'method' => 'POST']) }}
                {{Form::hidden('_method','DELETE')}}
    <br> <br>
	{{Form::submit('delet')}}
            
			  
            {{ Form::close() }}
 @endsection