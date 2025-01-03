<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    use ValidatesRequests;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::orderby('created_at', 'desc')->get();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validation
        $this->validate($request, [
            'name' => 'required|min:2|max:50|unique:categories',
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->save();

        flash('Category created successfully!')->success();
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
