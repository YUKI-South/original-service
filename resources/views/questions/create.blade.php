@extends('layouts.app')

@section('content')
    <h1 class='text-center mb-5 pb-5'>質問作成</h1>
    <div>
        {!! Form::open(['route' => 'questions.store'])!!}  
            <div class="form-group mb-5 pt-5">
            {!! Form::textarea('content', null, ['class' => 'form-control', 'rows' => '5'])!!}
            </div>
            <div class='text-right'>
            {!! Form::submit('質問を投稿', ['class' => 'btn btn-lg btn-info'])!!}
            </div>
        {!! Form::close()!!}
    </div>
    
   
    
    
@endsection