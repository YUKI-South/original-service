@extends('layouts.app')

@section('content')
    @if(Auth::check())
        @include('questions.questions')
        {!! link_to_route('logout.get', 'ログアウト', [], ['class' => 'btn btn-sm btn-outline-danger'])!!}
    @endif
@endsection