<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

class SizesController extends Controller
{
    use ValidatesRequests;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sizes = Size::orderby('created_at', 'desc')->get();
        return view('sizes.index', compact('sizes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sizes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validation
        $this->validate($request, [
            'size' => 'required|min:1|max:50|unique:sizes',
        ]);

        $size = new Size();
        $size->size = $request->size;
        $size->save();

        flash('Size created successfully!')->success();
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
        $size = Size::findOrFail($id);
        return view('sizes.edit', compact('size'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //validation
        $this->validate($request, [
            'size' => 'required|min:1|max:50|unique:sizes,size,' .$id
        ]);

        $size= Size::findOrFail($id);

        $size->size = $request->size;
        $size->save();

        flash('Size updated successfully!')->success();
        return redirect()->route('sizes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $size = Size::findOrFail($id);
        $size->delete();

        flash('Size deleted successfully!')->success();
        return redirect()->route('sizes.index');
    }
}
