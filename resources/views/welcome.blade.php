@extends('layouts.app')

@section('content')
    @if(Auth::check())
        {!! link_to_route('logout.get', 'ログアウト', [], ['class' => 'btn btn-sm btn-outline-danger'])!!}
        <div class='mb-5'>
            <form action='{{ action('UsersController@create')}}' method='post' enctype='multipart/form-data'>
                <input type='file' name='image'>
                {{ csrf_field() }}
                <input type='submit' value='アップロード'>
            </form>
        </div>
    @else
        <div class='row'>
            <div class='col-sm-2 offset-sm-10'>
                {!! link_to_route('signup.get', '新規登録', [], ['class' => 'btn btn-sm btn-outline-dark'])!!}
                {!! link_to_route('login.get', 'ログイン', [], ['class' => 'btn btn-sm btn-outline-success'])!!}
            </div>
        </div>
    @endif
@endsection