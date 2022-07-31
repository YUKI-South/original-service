@extends('layouts.app')
@section('content')
    <div class='row'>
        <div class='col-sm-2 offset-sm-10'>
            {!! link_to_route('signup.get', '新規登録', [], ['class' => 'btn btn-sm btn-outline-dark'])!!}
        </div>
    </div>
@endsection