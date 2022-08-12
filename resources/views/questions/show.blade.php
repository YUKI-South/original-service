@extends('layouts.app')

@section('content')
    <ul class='list-unstyledss'>
        <li class='media'>
            @if(!is_null($question->user->icon_url))
                <a href='{{ route('myPage.myPage')}}'><img width='100' class='d-flex mr-3 rounded-circle ' src='{{ $question->user->icon_url }}' alt=''></a>
            @else
                <a href='{{ route('myPage.myPage')}}'><img width='100' class='d-flex mr-3 rounded-circle ' src='/clear-up/resources/views/no icon/アイコン画像.jpeg' alt=''></a>
            @endif
            <div class='media-body'>
                <p>{!! nl2br(e($question->content))!!}</p>
            </div>
        </li>
    </ul>
    
    <div>
    @include('answers.answers')
    </div>
    <div>
    @include('answers.create')
    </div>
@endsection