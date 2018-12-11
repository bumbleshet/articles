<?php

namespace App\Http\Controllers;
use \App\Article;
use Request, Validator;

class ArticlesController extends Controller
{
    public function index()
    {

        $articles = Article::latest()->get();

    	return view('articles.index', compact('articles'));
    }

    public function create()
    {
    	return view('articles.create');
    }

    public function show($id)
    {
        $article = Article::findorfail($id);

        return view('articles.show', compact('article'));
    }

    public function store()
    {
    	$inputs = Request::all();

        $rules = [
            'title' => 'required|min:3',
            'body' => 'required',
        ];

        $err_msgs = [
            'title.required' => 'Article must have a title', 
            'title.min' => 'Article Title must be atleast 3 characters.', 
            'body.required' => 'Article body is required.', 
        ];

        $validator = Validator::make(Request::all(), $rules, $err_msgs);

        if ($validator->fails()) {

            return redirect()->back()
                ->withInput(Request::all())
                ->withErrors($validator);
        }

        Article::create($inputs);

    	return redirect('articles');
    }

    public function update($id)
    {

        $rules = [
            'title' => 'required|min:3',
            'body' => 'required',
        ];

        $err_msgs = [
            'title.required' => 'Article must have a title', 
            'title.min' => 'Article Title must be atleast 3 characters.', 
            'body.required' => 'Article body is required.', 
        ];

        $validator = Validator::make(Request::all(), $rules, $err_msgs);

        if ($validator->fails()) {

            return redirect()->back()
                ->withInput(Request::all())
                ->withErrors($validator);
        }

        $article = Article::find($id);
        $article->fill(Request::all());
        $article->save();

        return redirect('articles');

    }

}
