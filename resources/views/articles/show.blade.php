@extends('layouts.app')

@section('content')
    <h2 class="show-text">{{__('app.conference_module.title')}}: {{$article['title']}}</h2>
    <h4 class="show-text">{{__('app.conference_module.content')}}: {{$article['content']}}</h4>
    <h4 class="show-text">{{__('app.conference_module.date')}}: {{$article['date']}}</h4>
    <h4 class="show-text">{{__('app.conference_module.address')}}: {{$article['address']}}</h4>

    <div>
    <a href="{{ route('articles.index') }}"><button type="button" class="btn btn-primary">{{__('app.conference_module.back_to_the_list')}}</button></a>
    </div>
@endsection
