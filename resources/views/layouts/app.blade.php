<!doctype html>
<html lang="en" style="height: 100%">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
</head>
<body class="mainPageBody">
    <header>
        @guest
            <a href="{{route('login')}}">{{__('app.conference_module.login')}}</a>
        @else
            <a class="logout" id="makeLogout" href="{{route('logout')}}">{{__('app.conference_module.logout')}}</a>
            <form id="logoutForm" action="{{route('logout')}}" method="post" style="display: none;">
                @csrf

            </form>
        @endguest

        @if(session()->get('locale') === 'en')
            <a href="{{ route('lang.change', ['lang' => 'lt']) }}">LT</a>
        @else
            <a href="{{ route('lang.change', ['lang' => 'en']) }}">EN</a>
        @endif

        @auth
            <h3>{{__('app.conference_module.welcome', ['name' => auth()->user()->username])}}</h3>
            <br>
        @endauth

    </header>
@yield('content')
</body>
</html>
