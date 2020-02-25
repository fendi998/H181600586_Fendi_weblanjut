<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriPengumumanAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $KategoriPengumuman=KategoriPengumuman::all();

        return $KategoriPengumuman;
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

        $KategoriPengumuman=Kategoripengumuman::create($input);

        return $KategoriPengumuman;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $KategoriPengumuman=KategoriPengumuman::find($id);

        return $KategoriPengumuman;
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input=$request->all;
        $atikel=Pengumuman::find($id);

        if(empty($pengumuman)){
            return response()->json(['massage'=>'data tidak ditemukan'],404);
        }
        
        $pengumuman->update($input);

        return response()->json($pengumuman); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengumuman=Pengumuman::find($id);

        if(empty($pengumuman)){
            return response()->json(['massage'=>'data tidak ditemukan'],404);
        }
        $pengumuman->delete();

        return response()->json(['massage'=>'data telah dihapus']);
    }
}
