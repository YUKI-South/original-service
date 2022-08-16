@if (count($answers) > 0)
    <ul class='list-unstyled'>
        @foreach ($answers as $answer)
            @if($answer->question_id === $question->id)
            <li class='media mb-5 pb-5 pt-5'>
            @if(!is_null($answer->user->icon_url))
                @if($answer->user_id === Auth::id())
                    <a href='{{ route('myPage.myPage')}}'><img width="70" height="70" class='d-flex mr-3 rounded-circle ' src='{{ $answer->user->icon_url }}' alt='icon'></a>
                @else
                    <a href='{{ route('users.show', ['id' => $answer->user_id])}}'><img width="70" height="70" class='d-flex mr-3 rounded-circle ' src='{{ $answer->user->icon_url }}' alt='icon'></a>
                @endif
            @else
                @if($answer->user_id === Auth::id())
                    <a href='{{ route('myPage.myPage')}}'><img width="70" height="70" class='d-flex mr-3 rounded-circle' src="{{asset('image/no_icon.jpg')}}" alt="icon"></a>
                @else
                    <a href='{{ route('users.show', ['id' => $answer->user_id])}}'><img width="70" height="70" class='d-flex mr-3 rounded-circle' src="{{ asset('image/no_icon.jpg')}}" alt='icon'></a>
                @endif
            @endif
                <div class='media-body'>
                    <p>{!! nl2br(e($answer->content)) !!}</p>
                </div>
            </li>
            @endif
        @endforeach
    </ul> 
@endif