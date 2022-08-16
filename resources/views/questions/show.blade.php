@extends('layouts.app')

@section('content')
    <ul class='list-unstyledss'>
        <li class='media mb-5 pb-5 pt-5'>
            @if(!is_null($question->user->icon_url))
                @if($question->user_id === Auth::id())
                    <a href='{{ route('myPage.myPage')}}'><img width='70' height="70" class='d-flex mr-3 rounded-circle ' src='{{ $question->user->icon_url }}' alt='icon'></a>
                @else
                    <a href='{{ route('users.show', ['id' => $question->user_id])}}'><img width='70' height="70" class='d-flex mr-3 rounded-circle ' src='{{ $question->user->icon_url }}' alt='icon'></a>
                @endif
            @else
                @if($question->user_id === Auth::id())
                    <a href='{{ route('myPage.myPage')}}'><img width='70' height="70" class='d-flex mr-3 rounded-circle ' src="{{ asset('image/no_icon.jpg')}}" alt='icon'></a>
                @else
                     <a href='{{ route('users.show', ['id' => $question->user_id])}}'><img width='70' height="70" class='d-flex mr-3 rounded-circle ' src="{{ asset('image/no_icon.jpg')}}" alt='icon'></a>
                @endif
            @endif
            <div class='media-body'>
                <p>{!! nl2br(e($question->content))!!}</p>
                @if($question->user_id === Auth::id())
                    {!! Form::open(['route' => ['questions.destroy', $question->id], 'method' => 'delete'])!!}
                            {!! Form::submit('削除', ['class' => 'btn btn-outline-danger'])!!}
                    {!! Form::close()!!}
                @endif
            </div>
        </li>
    </ul>
    
   
    @include('answers.answers')
    @include('answers.create')
@endsection
