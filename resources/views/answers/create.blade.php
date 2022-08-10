{!! Form::open(['route' => 'answers.store'])!!}
    
    <div class='form-group'>
        {!! Form::label('content', '質問に答える')!!}
        {!! textarea('content', null, ['class' => 'form-controls', 'rows' => '2'])!!}
    </div>
    
    {!! Form::submit('回答', ['class' => 'btn btn-danger btn-lg'])!!}
{!! Form::close()!!}