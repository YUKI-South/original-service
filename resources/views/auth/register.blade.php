@extends('layouts.app')

@section('content')
    <div class='text-center mb-5 mt-5'>
        <h1>新規登録</h1>
    </div>
    <div>
        {!! Form::open(['route' => 'signup.post'])!!}
            <div class='form-group row mb-5'>
                <div class='col-sm-2'>
                    {!! Form::label('name', 'ニックネーム')!!}
                </div>
                <div class='col-sm-10'>
                    {!! Form::text('name', null, ['class' => 'form-control'])!!}
                </div>
            </div>
                
            <div class='form-group row mb-5'>
                <div class='col-sm-2'>
                    {!! Form::label('email', 'Eメール')!!}
                </div>
                <div class='col-sm-10'>
                    {!! Form::email('email', null, ['class' => 'form-control'])!!}
                </div>
            </div>
                
            <div class='form-group row mb-5'>
                <div class='col-sm-2'>
                    {!! Form::label('password', 'パスワード')!!}
                </div>
                <div class='col-sm-10'>
                    {!! Form::password('password', ['class' => 'form-control'])!!}
                </div>
            </div>
                
            <div class='form-group row mb-5'>
                <div class='col-sm-2'>
                    {!! Form::label('password_confirmation', '確認')!!}
                </div>
                <div class='col-sm-10'>
                    {!! Form::password('password_confirmation', ['class' => 'form-control'])!!}
                </div>    
            </div>
                
            <div class='row'>
                <div class='col-sm-1 offset-sm-11'>
                    {!! Form::submit('登録', ['class' => 'btn btn-lg btn-light'])!!}
                </div>
            </div>
        {!! Form::close()!!}
    </div>
@endsection