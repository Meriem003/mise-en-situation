<?php

namespace App\Http\Controllers;

use App\Models\article;
use App\Http\Requests\StorearticleRequest;
use App\Http\Requests\UpdatearticleRequest;

class ArticleController extends Controller
{

    public function index()
    {
        $articles = article::all();
        return view('welcome',compact('articles'));
    }
    public function create()
    {
        
    }
    public function store(StorearticleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatearticleRequest $request, article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(article $article)
    {
        //
    }
}
