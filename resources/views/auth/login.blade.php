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
<body class="login-body">
<form action="{{ route('login') }}" method="post">
    @csrf
    <div>
        <label for="username-input" class="login-label">{{__('app.conference_module.username')}}</label>
        <input type="text" id="username-input" class="login-input" name="username" value="{{old('username')}}">
        @error('username')
        <p>{{$message}}</p>
        @enderror
    </div>
    <div>
        <label for="password-input" class="login-label">{{__('app.conference_module.password')}}</label>
        <input type="password" id="password-input" class="login-input" name="password" value="{{old('password')}}">
        @error('password')
        <p>{{$message}}</p>
        @enderror
    </div>
    <div>
        <label for="remember-input" class="login-label ">{{__('app.conference_module.remember_me')}}</label>
        <input type="checkbox" id="remember-input" name="remember" value="1">
    </div>
    <input type="submit" class="btn btn-warning mygtuko-apvalinimas mt-3" value="{{__('app.conference_module.login')}}">
    <a href="{{route('articles.index')}}">
        <input type = "submit" class="mt-3 btn btn-warning mygtuko-apvalinimas" value="  {{__('app.conference_module.back')}}  ">
    </a>

</form>
</body>
</html>
