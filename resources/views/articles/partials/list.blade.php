<div class="conference-block">
    <h2>{{$article['title']}}</h2>
    <h4>{{$article['content']}}</h4>
    <h4>{{$article['date']}}</h4>
    <h4>{{$article['address']}}</h4>
    @auth
    <a href="{{ route('articles.edit', ['article' => $article['id']]) }}"><button type="button" class="btn btn-success">Edit</button></a>
    <form action="{{ route('articles.destroy', ['article' => $article['id']]) }}" method="post">
        @method('delete')
        @csrf
        <input type="submit" value="Delete" class="btn btn-danger">
    </form>
    @endauth
</div>
