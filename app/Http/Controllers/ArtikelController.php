<?php

namespace App\Http\Controllers;

use App\artikel;
use App\kategori_artikel;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel=artikel::all();


        return view('artikel.index')->with('artikel',$artikel);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori_artikel = kategori_artikel::pluck('nama','id');
        return view('artikel.create')->with('kategori_artikel', $kategori_artikel);
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

        artikel::create($input);

        return redirect(route('artikel.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artikel=artikel::find($id);

        if (empty ($artikel))
        {
            return redirect (route('artikel.index'));
        }

        return view('artikel.show', compact('artikel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artikel=artikel::find($id);

        $kategori_artikel = kategori_artikel::pluck('nama','id');

        if (empty ($artikel))
        {
            return redirect (route('artikel.index'));
        }

        return view('artikel.edit', compact('artikel','kategori_artikel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $edit = $request->all();
        artikel::find($id)->update($edit);

        return redirect(route('artikel.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy(artikel $artikel)
    {
        //
    }
}
