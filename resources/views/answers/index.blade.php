@if (count($answers) > 0)
    <ul class='list-unstyled'>
        @foreach ($answers as $answer)
            @if($answer->question_id === $question->id)
            <li class='media'>
                <img width="150" class='d-flex mr-3 rounded-circle ' src='{{ $question->user->icon_url }}' alt=''>
                <div class='media-body'>
                    <a　href=''>
                        <p>{!! nl2br(e($answer->content))!!}</p>
                    </a>
                </div>
            </li>
            @endif
        @endforeach
    </ul> 
@endif