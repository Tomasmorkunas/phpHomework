<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Models\Article;
use Illuminate\Http\RedirectResponse;

class ArticlesController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('articles.index', ['articles' => Article::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticleRequest $request, Article $article): RedirectResponse
    {
        $validated = $request->validated();
        $article->title = $validated['title'];
        $article->content = $validated['content'];
        $article->date = $validated['date'];
        $article->address = $validated['address'];
        $article->save();

        return redirect()->route('articles.show', ['article' => $article->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('articles.show', ['article' => Article::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('articles.edit', ['article' => (new Article())->findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreArticleRequest $request, int $id) : RedirectResponse
    {
        $article = (new Article())->findOrFail($id);
        $validated = $request->validated();
        $article->fill($validated);
        $article->save();

        $request->session()->flash('status', __('app.conference_module.conference_updated'));
        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id) : RedirectResponse
    {
        $article = (new Article())->findOrFail($id);
        $article->delete();

        session()->flash('status', __('app.conference_module.conference_deleted'));
        return redirect()->route('articles.index');
    }
}
