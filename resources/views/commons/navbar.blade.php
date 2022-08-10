<header class='mb-5'>
    

            <ul class="nav nav-justified">
                @if(Auth::check())
                    <li class='nav-item'>
                        <a class='nav-link btn btn-lg btn-warning btn-block'  href='/'>ホーム</a>
                    </li>
                    <li class='nav-item'>
                        {!! link_to_route('users.show', 'プロフィール', ['user' => Auth::id()], ['class' => 'btn btn-lg btn-warning btn-block nav-link']) !!}
                    </li>
                    <li class='nav-item'>
                        {!! link_to_route('questions.create', '      質問      ', [], ['class' => 'btn btn-lg btn-warning btn-block nav-link'])!!}
                    </li>
                    <li class='nav-item'>
                        {!! link_to_route('questions.followings', 'フォロー', ['user' => Auth::id()], ['class' => 'btn btn-lg btn-warning btn-block nav-link']) !!}
                    </li>
                @else
                    <li class='nav-item'>
                    {!! link_to_route('signup.get', '新規登録', [], ['class' => 'btn btn-sm btn-outline-dark nav-link'])!!}
                    </li>
                    <li class='nav-item'>
                    {!! link_to_route('login.get', 'ログイン', [], ['class' => 'btn btn-sm btn-outline-success nav-link'])!!}
                    </li>
                @endif
            </ul>
</header>