<?php

namespace App\Http\Controllers;

use App\kategori_galeri;
use Illuminate\Http\Request;

class KategoriGaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori_galeri = kategori_galeri::all();

        return view('kategori_galeri.index')->with('kategori_galeri',$kategori_galeri);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\kategori_galeri  $kategori_galeri
     * @return \Illuminate\Http\Response
     */
    public function show(kategori_galeri $kategori_galeri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kategori_galeri  $kategori_galeri
     * @return \Illuminate\Http\Response
     */
    public function edit(kategori_galeri $kategori_galeri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kategori_galeri  $kategori_galeri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kategori_galeri $kategori_galeri)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kategori_galeri  $kategori_galeri
     * @return \Illuminate\Http\Response
     */
    public function destroy(kategori_galeri $kategori_galeri)
    {
        //
    }
}
