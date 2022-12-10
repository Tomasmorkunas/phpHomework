<div class="conference-block">
    <h2 class="mb-4" >{{$article['title']}}</h2>
    <h4>{{__('app.conference_module.content')}}: {{$article['content']}}</h4>
    <h4>{{__('app.conference_module.date')}}: {{$article['date']}}</h4>
    <h4 class="mb-4" >{{__('app.conference_module.address')}}: {{$article['address']}}</h4>
    @auth
    <a href="{{ route('articles.edit', ['article' => $article['id']]) }}"><button type="button" class="btn btn-success mb-2">{{__('app.conference_module.edit')}}</button></a>
    <form action="{{ route('articles.destroy', ['article' => $article['id']]) }}" method="post">
        @method('delete')
        @csrf
        <input type="submit" value="{{__('app.conference_module.delete')}}" class="btn btn-danger">
    </form>
    @endauth
</div>
