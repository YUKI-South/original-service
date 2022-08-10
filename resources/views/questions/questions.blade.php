@if (count($questions) > 0)
    <ul class='list-unstyled'>
        @foreach ($questions as $question)
            @if($user->id != $question->user_id)
            <li class='media'>
                <img width="100" class='d-flex mr-3 rounded-circle ' src='{{ $question->user->icon_url }}' alt=''>
                <div class='media-body'>
                    <a　href=''>
                        <p>{!! nl2br(e($question->content))!!}</p>
                    </a>
                </div>
            </li>
            @endif
        @endforeach
    </ul> 
    {{ $questions->links() }}
@endif