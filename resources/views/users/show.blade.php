@extends('layouts.app')

@section('content')
    @if(Auth::id() != $user->id)
        @if(Auth::user()->is_following($user->id))
            <div class="text-right mb-5 pb-5">
                {!! Form::open(['route' => ['user.unfollow', $user->id], 'method' => 'delete'])!!}
                    {!! Form::submit('フォロー解除', ['class' => 'btn btn-secondary btn-lg'])!!}
                {!! Form::close()!!}
            </div>
        @else
            <div class="text-right mb-5 pb-5">
                {!! Form::open(['route' => ['user.follow', $user->id]])!!}
                    {!! Form::submit('フォロー', ['class' => 'btn btn-info btn-lg'])!!}
                {!! Form::close() !!}
            </div>
        @endif
    @endif
    
    <div class="mb-3">
        @if(!is_null($user->icon_url))
            <img width="150" height="150" class="d-block mx-auto rounded-circle" src="{{ $user->icon_url }}" alt="icon">
        @else
            <img width="150" height="150" class="d-block mx-auto rounded-circle" src="{{ asset('image/no_icon.jpg')}}" alt="icon">
        @endif
    </div>
    <div class="mb-5 pb-5">
        <h2 class="text-center">{{ $user->name }}</h2>
    </div>
    <div class="mb-5 pb-5">
        <span class="badge badge-info">{{ $user->followings_count }}</span>
        <span>フォロー</span>
        <span class="d-block"></span>
        <span class="badge badge-info">{{ $user->followers_count }}</span>
        <span>フォロワー</span>
    </div>
@endsection