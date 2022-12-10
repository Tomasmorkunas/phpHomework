<div class="article-element">
    <label for="title-input" class="form-text">Title</label>
    <input type="text" class="form-control" id="title-input" name="title" value="{{old('title', optional($article ?? null)->title)}}">
    @error('title')
    <p>{{$message}}</p>
    @enderror
</div>
<div class="article-element">
    <label for="content-input" class="form-text">Content</label>
    <textarea id="content-input" class="form-control" name="content">{{old('content', optional($article ?? null)->content)}}</textarea>
    @error('content')
    <p>{{$message}}</p>
    @enderror
</div>
<div class="article-element">
    <label for="address-input" class="form-text">Address</label>
    <input type="text" id="address-input" class="form-control" name="address" value="{{old('address', optional($article ?? null)->address)}}">
    @error('address')
    <p>{{$message}}</p>
    @enderror
</div>
<div class="article-element">
    <label class="form-text">Date</label>
    <input type="date" id="date-input" class="form-control" name="date" value="{{old('date', optional($article ?? null)->date)}}">
    @error('date')
    <p class="error-message">{{$message}}</p>
    @enderror
</div>
