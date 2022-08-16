@extends('layouts.app')

@section('content')
    <h1 class="text-center mb-5 pb-5">プロフィールを編集</h1>
    {!! Form::open(['route' => ['myPage.update'], 'method' => 'put', 'files' => true])!!}
        <div class='form-group row mb-5'>
            <div class="col-sm-2">
                {!! Form::label('image', 'アイコン')!!}
            </div>
            <div class="col-sm-10">
                {!! Form::file('icon_url')!!}
            </div>
        </div>
                
        <div class='form-group row mb-5'>
            <div class='col-sm-2'>
                {!! Form::label('name', 'ニックネーム')!!}
            </div>
            <div class='col-sm-10'>
                {!! Form::text('name', $user->name, ['class' => 'form-control'])!!}
            </div>
        </div>
        
        <div class="text-right">
        {!! Form::submit('変更を保存', ['class' => 'btn btn-outline-dark'])!!}
        </div>
    {!! Form::close()!!}
@endsection