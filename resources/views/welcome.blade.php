@extends('layouts.app')

@section('content')
    @if(Auth::check())
        @include('questions.questions')
    @else
        <div class="row">
            <img src="image/top_page.jpg" class="img-fluid" alt="Responsive image">
            <div class="col-sm-2 offset-sm-10">
                {!! link_to_route('signup.get', '新規登録', [], ['class' => 'btn btn-sm btn-outline-dark'])!!}
                {!! link_to_route('login.get', 'ログイン', [], ['class' => 'btn btn-sm btn-outline-success'])!!}
            </div>
        </div>
        <div class="mt-5">
            <h1 class="display-1 text-sm-center">Clear up</h1>
        </div>
    
    @endif
@endsection