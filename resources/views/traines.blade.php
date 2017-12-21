@extends('layouts.app')

@section('content')
        @if (count($tears) > 0)
            @foreach($tears as $tear)
                
                 
              <div class="panel-heading"><a href="/traines/{{$tear->tears_id}}">{{$tear->tears_id}}</a> 
                <a href="/traines/{{$tear->tears_id}}">{{$tear->tears_title}}</a></div>
                @endforeach
            @else
                    <p>notheing</p>
                @endif
                
        <a class="btn btn-primary" href="/traines/create">new studeins</a>
@endsection