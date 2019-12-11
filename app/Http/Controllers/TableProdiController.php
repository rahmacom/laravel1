<?php

namespace App\Http\Controllers;

use App\Table_Prodi;
use Illuminate\Http\Request;

class TableProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Prodi =Table_Prodi::all();

        return view('prodi.index')->with('Prodi',$Prodi);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        return view('prodi.create');
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

        Table_Prodi::create($input);

        return redirect(route('prodi.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Table_Prodi  $table_Prodi
     * @return \Illuminate\Http\Response
     */
    public function show(Table_Prodi $table_Prodi)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Table_Prodi  $table_Prodi
     * @return \Illuminate\Http\Response
     */
    public function edit(Table_Prodi $table_Prodi)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Table_Prodi  $table_Prodi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Table_Prodi $table_Prodi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Table_Prodi  $table_Prodi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Table_Prodi $table_Prodi)
    {
        //
    }
}
