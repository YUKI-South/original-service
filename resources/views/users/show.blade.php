@extends('layouts.app')

@section('content')
    {!! link_to_route('questions.myQuestion', 'あなたの質問', ['user' => $user->id], ['class' => 'btn btn-dark btn-lg'])!!}
@endsection