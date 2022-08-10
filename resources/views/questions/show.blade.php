@extends('layouts.app')

@section('content')
    <ul class='list-unstyledss'>
        <li class='media'>
            <img width='150' class='d-flex mr-3 rounded-circle ' src='{{ $question->user->icon_url }}' alt=''>
            <div class='media-body'>
                <p>{!! nl2br(e($question->content))!!}</p>
            </div>
        </li>
    </ul>
    
    <div>
    @include('answers.index')
    </div>
    <div>
    @include('answers.create')
    </div>
@endsection