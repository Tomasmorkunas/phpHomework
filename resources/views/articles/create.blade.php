@extends('layouts.app')

@section('title', __('app.conference_module.conference_creation_form'))

@section('content')
    <form action="{{ route('articles.store') }}" method="post">
        @csrf
        @include('articles.partials.form')
        <div><input type="submit" class="mt-4 btn btn-primary button-rounding" value="{{__('app.conference_module.create')}} "></div>
    </form>
    <a href="{{route('articles.index')}}">
        <div><input type = "submit" class="mt-2 btn btn-primary button-rounding" value="  {{__('app.conference_module.back')}}  "></div>
    </a>
@endsection
