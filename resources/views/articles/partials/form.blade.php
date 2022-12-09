<div class="article-element">
    <label for="title-input">Title</label>
    <input type="text" id="title-input" name="title" value="{{old('title', optional($article ?? null)->title)}}">
    @error('title')
    <p>{{$message}}</p>
    @enderror
</div>
<div class="article-element">
    <label for="content-input">Content</label>
    <textarea id="content-input" name="content">{{old('content', optional($article ?? null)->content)}}</textarea>
    @error('content')
    <p>{{$message}}</p>
    @enderror
</div>
<div class="article-element">
    <label for="address-input">Address</label>
    <input type="text" id="address-input" name="address" value="{{old('address', optional($article ?? null)->address)}}">
    @error('address')
    <p>{{$message}}</p>
    @enderror
</div>
<div class="article-element">
    <label class="font-500">Date</label>
    <input type="date" id="date-input" name="date" value="{{old('date', optional($article ?? null)->date)}}">
    @error('date')
    <p class="error-message">{{$message}}</p>
    @enderror
</div>
