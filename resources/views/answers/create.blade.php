{!! Form::open(['route' => ['answers.store', $question->id]])!!}
    <div class='row'>
            <div class='form-group'>
                {!! Form::label('content', '質問に答える')!!}
                {!! Form::textarea('content', null, ['class' => 'form-controls', 'rows' => '2'])!!}
            </div>
            
            {!! Form::submit('回答', ['class' => 'btn btn-danger'])!!}
    </div>
{!! Form::close()!!}