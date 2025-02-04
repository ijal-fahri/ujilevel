<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::all();
        return view('admin.about.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required',
            'description' => 'required',
        ]);

        About::create($request->all());
        return redirect()->route('about.index')->with('success','Berhasil menambahkan data!');
    }

    /**
     * Display the specified resource.
     */
    public function show(about $about)
    {
        return view ("admin.about.show", compact ('about'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(about $about)
    {
        return view('admin.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, about $about)
    {
        $request->validate([
            'title'       => 'required',
            'description' => 'required',
        ]);

        $about->update($request->all());
        return redirect()->route('about.index')->with('success','berhasil mengubah data!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $about = About::findOrFail($id); // Mencari data berdasarkan ID
        $about->delete(); // Menghapus data
        return redirect()->route('about.index')->with('success','berhasil menghapus data!');
    }
}
