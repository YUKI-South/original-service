@if (count($questions) > 0)
    <ul class='list-unstyled'>
        @foreach ($questions as $question)
            <li class='media'>
                <img class='rounded-circle' src='{{ $question->user()->icon_url}}' alt=''>
                <div class='media-body'>
                    <a　href=''>
                        <p>{!! nl2br(e($question->content))!!}</p>
                    </a>
                </div>
            </li>
        @endforeach
    </ul> 
    {{ $questions->links() }}
@endif