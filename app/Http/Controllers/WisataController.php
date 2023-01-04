<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $wisatas = Wisata::paginate(10);
        return response()->json([
            'data' => $wisatas
        ]);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $wisata = Wisata::create([
            'wisata' => $request->wisata,
            'id_kategori' => $request->id_kategori,
            'lokasi' => $request->lokasi,
            'gambar' => $request->gambar,
            'deskripsi' => $request->deskripsi,
            'id_mitra' => $request->id_mitra

        ]);
        return response()->json([
            'data' => $wisata
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function show(Wisata $wisata)
    {
        //
        return response()->json([
            'data' => $wisata
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function edit(Wisata $wisata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wisata $wisata)
    {
        //
        $wisata->wisata = $request->wisata;
        $wisata->id_kategori = $request->id_kategori;
        $wisata->lokasi = $request->lokasi;
        $wisata->gambar = $request->gambar;
        $wisata->deskripsi = $request->deskripsi;
        $wisata->id_mitra = $request->id_mitra;
        $wisata->save();

        return response()->json([
            'data' => $wisata
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wisata $wisata)
    {
        //
        $wisata->delete();
        return response()->json([
            'message' => 'data wisata deleted'
        ], 204);
    }
}
