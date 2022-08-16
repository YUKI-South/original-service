@extends('layouts.app_without_nav')

@section('content')
     <div class='text-center mb-5 mt-5'>
        <h1>ログイン</h1>
    </div>
    <div>
        {!! Form::open(['route' => 'login.post'])!!}
                
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
                
            <div class='row'>
                <div class='col-sm-1 offset-sm-11'>
                    {!! Form::submit('ログイン', ['class' => 'btn btn-lg btn-outline-dark'])!!}
                </div>
            </div>
        {!! Form::close()!!}
    </div>
@endsection