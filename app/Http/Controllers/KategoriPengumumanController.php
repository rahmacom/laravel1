<?php

namespace App\Http\Controllers;

use App\kategori_pengumuman;
use Illuminate\Http\Request;

class KategoriPengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori_pengumuman = kategori_pengumuman::all();

        return view('kategori_pengumuman.index')->with('kategori_pengumuman', $kategori_pengumuman);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('kategori_pengumuman.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input=$request->all();

        kategori_pengumuman::create($input);

        return redirect(route('kategori_pengumuman.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\kategori_pengumuman  $kategori_pengumuman
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $kategori_pengumuman=kategori_pengumuman::find($id);

        return view('kategori_pengumuman.show', compact('kategori_pengumuman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kategori_pengumuman  $kategori_pengumuman
     * @return \Illuminate\Http\Response
     */
    public function edit(kategori_pengumuman $kategori_pengumuman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kategori_pengumuman  $kategori_pengumuman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kategori_pengumuman $kategori_pengumuman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kategori_pengumuman  $kategori_pengumuman
     * @return \Illuminate\Http\Response
     */
    public function destroy(kategori_pengumuman $kategori_pengumuman)
    {
        //
    }
}
