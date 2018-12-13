<?php

namespace App\Http\Controllers;
use \App\Category;
use Request, Validator;

class CategoryController extends Controller
{
    public function index()
    {

        $categories = Category::latest()->get();

    	return view('categories.index', compact('categories'));
    }

    public function create()
    {
    	return view('categories.create');
    }

    public function show($id)
    {
        $categories = Category::findorfail($id);

        return view('categories.show', compact('categories'));
    }

    public function store()
    {
    	$inputs = Request::all();

        $rules = [
            'category' => 'required|min:3',
        ];

        $err_msgs = [
            'category.required' => 'Category must have a title', 
            'category.min' => 'Category Title must be atleast 3 characters.', 
        ];

        $validator = Validator::make(Request::all(), $rules, $err_msgs);

        if ($validator->fails()) {

            return redirect()->back()
                ->withInput(Request::all())
                ->withErrors($validator);
        }

        Category::create($inputs);

    	return redirect('categories');
    }

    public function update($id)
    {

        $rules = [
            'category' => 'required|min:3',
        ];

        $err_msgs = [
            'category.required' => 'Category must have a title', 
            'category.min' => 'Category Title must be atleast 3 characters.', 
        ];

        $validator = Validator::make(Request::all(), $rules, $err_msgs);

        if ($validator->fails()) {

            return redirect()->back()
                ->withInput(Request::all())
                ->withErrors($validator);
        }

        $Category = Category::find($id);
        $Category->fill(Request::all());
        $Category->save();

        return redirect('categories');

    }

}
