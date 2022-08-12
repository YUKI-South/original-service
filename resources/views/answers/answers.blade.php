@if (count($answers) > 0)
    <ul class='list-unstyled'>
        @foreach ($answers as $answer)
            @if($answer->question_id === $question->id)
            <li class='media'>
            @if(!is_null($question->user->icon_url))
                <a href='{{ route('users.show', ['user' => $user->id])}}'><img width="70" class='d-flex mr-3 rounded-circle ' src='{{ $question->user->icon_url }}' alt='icon'></a>
            @else
                <a href='{{ route('users.show', ['user' => $user->id])}}'><img width="70" class='d-flex mr-3 rounded-circle ' src='' alt='../image/no_icon.jpeg'></a>
            @endif
                <div class='media-body'>
                        <p>{!! nl2br(e($answer->content))!!}</p>
                </div>
            </li>
            @endif
        @endforeach
    </ul> 
@endif