<?php

namespace App\Http\Controllers;

use App\Table_Mahasiswa;
use App\Table_Prodi;
use Illuminate\Http\Request;

class TableMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Mahasiswa =Table_Mahasiswa::all();

        return view('mahasiswa.index')->with('Mahasiswa',$Mahasiswa);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Prodi = Table_Prodi::pluck('kode', 'id');

        return view('mahasiswa.create')->with('Prodi', $Prodi);
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

        Table_Mahasiswa::create($input);

        return redirect(route('mahasiswa.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Table_Mahasiswa  $table_Mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Table_Mahasiswa $table_Mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Table_Mahasiswa  $table_Mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Table_Mahasiswa $table_Mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Table_Mahasiswa  $table_Mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Table_Mahasiswa $table_Mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Table_Mahasiswa  $table_Mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Table_Mahasiswa $table_Mahasiswa)
    {
        //
    }
}
