@extends('layouts.app')

@section('content')
    @if(session('status'))
        <div style="background-color: green; color: lime;">{{ session('status') }}</div>
    @endif

    <h2>{{__('app.conference_module.list_of_Conferences')}}</h2>
    @auth
        <a href="{{ route('articles.create') }}"><button type="button" class="btn btn-primary mb-4">{{__('app.conference_module.create')}}</button></a>
    @endauth
    @each('articles.partials.list', $articles, 'article')
@endsection
