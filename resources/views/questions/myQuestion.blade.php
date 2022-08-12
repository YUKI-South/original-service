@extends('layouts.app')

@section('content')
  @if (count($questions) > 0)
    <ul class='list-unstyled'>
        @foreach ($questions as $question)
            <li class='media mb-5'>
                @if(!is_null($question->user->icon_url))
                    <a href="{{ route('myPage.myPage')}}"><img width="70" class="d-flex mr-3 rounded-circle" src="{{ $question->user->icon_url }}" alt=""></a>
                @else
                    <a href="{{ route("myPage.myPage")}}"><img width="70" class="d-flex mr-3 rounded-circle" src="../image/no_icon.jpeg" alt="icon"></a>
                @endif
                <div class='media-body'>
                    <a href="{{ route('questions.show', ['question' => $question->id])}}"><p class='text-dark border boder-dark'>{!! nl2br(e($question->content))!!}</p></a>
                </div>
            </li>
        @endforeach
    </ul> 
    {{ $questions->links() }}
@endif
@endsection