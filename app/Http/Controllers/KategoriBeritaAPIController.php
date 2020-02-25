<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriBeritaAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $KategoriBerita=KategoriBerita::all();

        return $KategoriArtikel;
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

        $KategoriBerita=KategoriBerita::create($input);

        return $KategoriBerita;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $KategoriBerita=KategoriBerita::find($id);

        return $KategoriBerita;
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
        $berita=Berita::find(id);

        if (empty($berita)){
            return sesponse()->json(['massage'=>'data tidak ditemukan'],404);

        }
        $berita->update($input);

        return response()->json($berita);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita=Berita::find($id);
        if (empty($berita)){
            return response()->json(['massage'=>'data tiidak di temukan'],404);
            
        }
        $berita->delete();

        return response()->json(['massage'=>'data telah di hapus']);
    }
}
