@extends('layouts.app')

@section('content')
        <a href="/traines">go back</a>
        <h1>{{$tears->tears_title}}</h1>
             @foreach($tears->posts as $post)
                
                 {{$post->posts_title}}

                @endforeach
        <a href="/traines/{{$tears->tears_id}}/edit">edit  name</a>
    {{ Form::open(['action' => ['Tearscontroller@destroy',$tears->tears_id], 'method' => 'POST']) }}
                {{Form::hidden('_method','DELETE')}}
    <br> <br>
	{{Form::submit('delet')}}
            {{ Form::close() }}
			  
			
 @endsection