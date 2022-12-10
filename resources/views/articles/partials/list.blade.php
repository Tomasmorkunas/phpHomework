<div class="conference-block">
    <h2 class="mb-4" >{{$article['title']}}</h2>
    <h4>Content: {{$article['content']}}</h4>
    <h4>Date: {{$article['date']}}</h4>
    <h4 class="mb-4" >Address: {{$article['address']}}</h4>
    @auth
    <a href="{{ route('articles.edit', ['article' => $article['id']]) }}"><button type="button" class="btn btn-success mb-2">Edit</button></a>
    <form action="{{ route('articles.destroy', ['article' => $article['id']]) }}" method="post">
        @method('delete')
        @csrf
        <input type="submit" value="Delete" class="btn btn-danger">
    </form>
    @endauth
</div>
