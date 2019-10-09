<?php

namespace App\Http\Controllers;

use App\kategori_artikel;
use Illuminate\Http\Request;

class KategoriArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori_artikel = kategori_artikel::all();

        return view('kategori_artikel.index')->with('kategori_artikel',$kategori_artikel);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori_artikel.create');
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

        kategori_artikel::create($input);

        return redirect(route('kategori_artikel.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\kategori_artikel  $kategori_artikel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategori_artikel=kategori_artikel::find($id);

        return view('kategori_artikel.show', compact('kategori_artikel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kategori_artikel  $kategori_artikel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori_artikel=kategori_artikel::find($id);
        
        $kategori_artikel = kategori_artikel::pluck('nama','id');

        if (empty ($kategori_artikel)) 
        {
            return redirect (route('kategori_artikel.index'));
        }

        return view('kategori_artikel.edit', compact('kategori_artikel','kategori_artikel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kategori_artikel  $kategori_artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $edit = $request->all();
        kategori_artikel::find($id)->update($edit);

        return redirect(route('kategori_artikel.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kategori_artikel  $kategori_artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy(kategori_artikel $kategori_artikel)
    {
        //
    }
}
