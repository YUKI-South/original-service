@if (count($questions) > 0)
    <ul class='list-unstyled'>
        @foreach ($questions as $question)
           @if($user->id != $question->user_id)
            <li class='media mb-5 pb-5'>
                @if(!is_null($question->user->icon_url))
                    <a href="{{ route('users.show', ['id' => $question->user_id])}}"><img width="70" height="70 "class="mr-3 d-flex rounded-circle" src="{{ $question->user->icon_url }}" alt="icon"></a>
                @else
                    <a href="{{ route('users.show', ['id' => $question->user_id])}}"><img width="70" height="70" class="mr-3 d-flex rounded-circle" src="{{ asset('image/no_icon.jpg')}}" alt="icon"></a>
                @endif
                <div class='media-body'>
                    <a href="{{ route('questions.show', ['question' => $question->id]) }}">
                        <p class='text-dark border boder-dark'>{!! nl2br(e($question->content))!!}</p>
                    </a>
                </div>
            </li>
            @endif
        @endforeach
    </ul> 
    {{ $questions->links() }}
@endif