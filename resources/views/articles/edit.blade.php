@extends('layouts.app')

@section('title', 'Article Edit Form')
@section('content')
        <form action="{{ route('articles.update', ['article' => $article->id]) }}" method="post">
            @csrf
            @method('PUT')
            @include('articles.partials.form')
            <div><input type = "submit" class="mt-4 btn btn-primary mygtuko-apvalinimas" value="{{__('app.conference_module.update')}}"></div>
        </form>
        <a href="{{route('articles.index')}}">
            <div><input type = "submit" class="mt-2 btn btn-primary mygtuko-apvalinimas" value="  {{__('app.conference_module.back')}}  "></div>
        </a>
@endsection
