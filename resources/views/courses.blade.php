@extends('layouts.app')

@section('content')
        @if (count($posts) > 0)
            @foreach($posts as $post)
                
                 
              <div class="panel-heading"><a href="/courses/{{$post->posts_id}}">{{$post->posts_id}}</a> 
                <a href="/courses/{{$post->posts_id}}">{{$post->posts_title}}</a></div>
                @endforeach
            @else
                    <p>notheing</p>
                @endif
                
        <a class="btn btn-primary" href="/courses/create">new cours</a>
@endsection