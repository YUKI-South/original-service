@extends('layouts.app')

@section('content')
    <div class="text-right mb-5 pb-5">
        {!! link_to_route('myPage.edit', 'プロフィール編集', [], ['class' => 'btn btn-outline-dark'])!!}
    </div>
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
    <div class="text-right">
        <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModalCenter">
        アカウント削除
        </button>
    </div>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">注意！</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    一度アカウトを削除すると二度と復元はできません。<br>
                    それでもよろしいですか？
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">やめる</button>
                    {!! Form::open(['route' => ['myPage.destroy', $user->id], 'method' => 'delete'])!!}
                        {!! Form::submit('アカウトを削除', ['class' => 'btn btn-danger'])!!}
                    {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>
@endsection