@extends('layouts.app')

@section('content')
    @if(Auth::id() != $user-id)
        @if(Auth::user()->is_following($user-id))
            {!! Form::open(['route' ['user.unfollow', $user->id]])!!}
                {!! Form::submit('フォロー解除', ['class' => 'btn btn-secondary btn-lg'])!!}
            {!! Form::close()!!}
        @else
            {!! Form::open(['route' => ['user.follow', $user->id]])!!}
                {!! Form::submit('フォロー', ['class' => 'btn btn-info btn-lg'])!!}
            {!! Form::close() !!}
        @endif
    @endif
@endsection