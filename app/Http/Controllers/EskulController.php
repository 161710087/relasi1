<?php

namespace App\Http\Controllers;

use App\eskul;
use Illuminate\Http\Request;

class EskulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a=eskul::all();
        return view('eskul.index',compact('a'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eskul.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kategori = Eskul::create($request->all());
        alert()->success('Kategori Tersimpan')->autoclose(3500);
        return redirect()->route('ekskul.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\eskul  $eskul
     * @return \Illuminate\Http\Response
     */
    public function show(eskul $eskul)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\eskul  $eskul
     * @return \Illuminate\Http\Response
     */
    public function edit(eskul $eskul)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\eskul  $eskul
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, eskul $eskul)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\eskul  $eskul
     * @return \Illuminate\Http\Response
     */
    public function destroy(eskul $eskul)
    {
        //
    }
}
