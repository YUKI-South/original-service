<header class='mb-5'>
    <nav class='navbar navbar-expand-sm navbar-light bg-success'>
        <a class='navbar-brand href='/'>Clear-up</a>
        {!! link_to_route('users.show', 'プロフィール', ['user' => Auth::id()]) !!}
        {!! link_to_route('QuestionsController.create', '質問', [])!!}
        {!! link_to_route('')!!}
    </nav>
</header>