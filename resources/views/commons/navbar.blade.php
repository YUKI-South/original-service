<header>
    @if(Auth::check())
        <nav class="navbar navbar-dark bg-dark navbar-expand-sm mb-5">
            <a class="navbar-brand" href="/">Clear up</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('questions.create')}}">質問</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('questions.followings', ['user' => Auth::id()])}}">フォロー</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{Auth::user()->name}}                    
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            {!! link_to_route('myPage.myPage', 'プロフィール', [], ['class' => 'dropdown-item'])!!}
                            <div class="dropdown-divider"></div>
                            {!! link_to_route('questions.myQuestion', 'あなたの質問', [], ['class' => 'dropdown-item'])!!}
                            <div class="dropdown-divider"></div>
                            {!! link_to_route('logout.get', 'ログアウト', [], ['class' => 'dropdown-item'])!!}
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    @endif
</header>