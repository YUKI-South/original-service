@extends('layouts.app')

@section('content')
    
    <div class='ml-5'>
        {!! Form::open(['route' => 'questions.store'])!!}  
            
            {!! Form::textarea('content', null, ['class' => 'form-controls', 'rows' => '3'])!!}
            
            {!! Form::submit('質問を投稿', ['class' => 'btn btn-lg btn-info'])!!}
            
        {!! Form::close()!!}
    </div>
    
   
    
    
@endsection