@extends('layouts.app')

@section('content')
    @if(Auth::check())
        @include('questions.questions')
        {!! link_to_route('logout.get', 'ログアウト', [], ['class' => 'btn btn-sm btn-outline-danger'])!!}
    @else
        <div class='row'>
            <div class='col-sm-2 offset-sm-10'>
                {!! link_to_route('signup.get', '新規登録', [], ['class' => 'btn btn-sm btn-outline-dark'])!!}
                {!! link_to_route('login.get', 'ログイン', [], ['class' => 'btn btn-sm btn-outline-success'])!!}
            </div>
        </div>
    @endif
@endsection