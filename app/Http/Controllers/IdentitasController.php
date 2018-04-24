<?php

namespace App\Http\Controllers;

use App\identitas;
use Illuminate\Http\Request;

class IdentitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $identitas = identitas::all();
        return view('home',compact('identitas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $identitas = new identitas();
        $identitas->nama= $request->input('nama');
        $identitas->alamat= $request->input('alamat');
        $identitas->berat= $request->input('berat');
        $identitas->tinggi= $request->input('tinggi');
        $identitas->save();
        return redirect()->route('identitas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\identitas  $identitas
     * @return \Illuminate\Http\Response
     */
    public function show(identitas $identitas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\identitas  $identitas
     * @return \Illuminate\Http\Response
     */
    public function edit(identitas $identitas, $id)
    {
        $identitas=identitas::find($id);
        return view('update', compact('identitas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\identitas  $identitas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$identitas)
    {

        $identitas = identitas::find($identitas);
        $identitas->nama= $request->input('nama');
        $identitas->alamat= $request->input('alamat');
        $identitas->berat= $request->input('berat');
        $identitas->tinggi= $request->input('tinggi');
        $identitas->save();
        return redirect()->route('identitas.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\identitas  $identitas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $identitas=identitas::find($id);
        $identitas->delete();
        return redirect()->route('identitas.index');
    }
}
