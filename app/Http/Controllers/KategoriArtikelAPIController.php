<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriArtikelAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $KategoriArtikel=KategoriArtikel::all();

        return $KategoriArtiikel;
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

        $KategoriArtikkel=KategoriArtikel::create($input);

        return $KategoriArtikel;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $KategoriArtikel=KategoriArtikel::find($id);

        return $KategoriArtikel;
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
        $atikel=Artikel::find($id);

        if(empty($artiikel)){
            return response()->json(['massage'=>'data tidak ditemukan'],404);
        }
        
        $artikel->update($input);

        return response()->json($artikel); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $atikel=Artikel::find($id);

        if(empty($artiikel)){
            return response()->json(['massage'=>'data tidak ditemukan'],404);
        }
        $artikel->delete();

        return response()->json(['massage'=>'data telah dihapus']);
    }
}
