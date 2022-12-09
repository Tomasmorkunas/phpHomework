@extends('layouts.app')

@section('content')
    <h2>{{$article['title']}}</h2>
    <p>{{$article['content']}}</p>
    <p>{{$article['date']}}</p>
    <p>{{$article['address']}}</p>

    <div>
    <a href="{{ route('articles.index') }}"><button type="button">Back to the list</button></a>
    </div>
@endsection
