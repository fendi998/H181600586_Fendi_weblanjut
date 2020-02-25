<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriGaleriAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $KategoriGaleri=KategoriGalerii::all();

        return $KategoriGaleri;
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

        $KategoriGaleri=KategoriGaleri::create($input);

        return $KategoriGaleri;
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $KategoriGaleri=KategoriGaleri::find($id);

        return $KategoriGaleri;
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
        $galeri=Galeri::find(id);

        if (empty($berita)){
            return response()->json(['massage'=>'data tidak ditemukan'],404);

        }
        $galeri->update($input);

        return response()->json($galeri);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galeri=Galeri::find($id);
        if (empty($galerii)){
            return response()->json(['massage'=>'data tidak ditemukan'],404);

        }
        $berita->delete();

        return response()->json(['massage'=>'datta telah di hapus']);
    }
}
