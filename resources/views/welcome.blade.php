@extends('layouts.app')

@section('content')
    @if(Auth::check())
        @include('questions.questions')
    @endif
@endsection
