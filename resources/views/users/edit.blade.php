@extends('layouts.app')

@section('content')
 
    {!! Form::open(['route' => ['myPage.update'], 'method' => 'put', 'files' => true])!!}
        <div class='form-group row mb-5'>
                {!! Form::file('image')!!}
        </div>
                
        <div class='form-group row mb-5'>
            <div class='col-sm-2'>
                {!! Form::label('name', 'ニックネーム')!!}
            </div>
            <div class='col-sm-10'>
                {!! Form::text('name', $user->name, ['class' => 'form-control'])!!}
            </div>
        </div>
        
        {!! Form::submit('変更', ['class' => 'btn btn-dark btn-lg'])!!}
    {!! Form::close()!!}
@endsection