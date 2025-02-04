<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::all();
        return view('admin.category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required'
        ]);

        Category::create($request->all());
        return redirect()->route('category.index')->with('success','Berhasil menambahkan data!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view ("admin.category.show", compact ('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'title'       => 'required',
        ]);

        $category->update($request->all());
        return redirect()->route('category.index')->with('success','berhasil mengubah data!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id); // Mencari data berdasarkan ID
        $category->delete(); // Menghapus data
        return redirect()->route('category.index')->with('success','berhasil menghapus data!');
    }
}
