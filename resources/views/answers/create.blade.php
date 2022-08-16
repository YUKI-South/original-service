<div id="answer">
    @if($question->user_id != Auth::id()  )
        {!! Form::open(['route' => ['answers.store', $question->id]])!!}
                    <div class='form-group mb-1'>
                        {!! Form::label('content', '質問に答える')!!}
                        {!! Form::textarea('content', null, ['class' => 'form-control', 'rows' => '2'])!!}
                    </div>
                        
                    <div class="text-right pb-5">
                        {!! Form::submit('回答', ['class' => 'btn btn-danger'])!!}
                        </div>
            {!! Form::close()!!}
        @else
            {!! Form::open(['route' => ['answers.store', $question->id]])!!}
                        <div class='form-group mb-1'>
                            {!! Form::label('content', '回答者に返信')!!}
                            {!! Form::textarea('content', null, ['class' => 'form-control', 'rows' => '2'])!!}
                        </div>
                    
                        <div class="text-right pb-5">
                        {!! Form::submit('返信', ['class' => 'btn btn-danger'])!!}
                        </div>
            {!! Form::close()!!}
        @endif
    </div>

