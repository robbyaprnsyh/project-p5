<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Kategori;
use App\Models\Lokasi;
use App\Models\Wisata;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $wisata = Wisata::all();
        return view('wisatas.index', compact('wisata'));
    }

    // Metode lain tetap sama

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $event = Event::all();
        $kategori = Kategori::all();
        $lokasi = Lokasi::all();
        return view('wisatas.create', compact('event', 'kategori', 'lokasi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $wisata = new Wisata;
        $wisata->nama_wisata = $request->nama_wisata;
        $wisata->id_kategori = $request->id_kategori;
        $wisata->id_lokasi = $request->id_lokasi;
        $wisata->deskripsi = $request->deskripsi;
        $wisata->cover = $request->cover;
        $wisata->id_event = $request->id_event;

        // upload image
        if ($request->hasFile('cover')) {
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/wisata', $name);
            $wisata->cover = $name;
        }
        $wisata->save();

        return redirect()->route('wisata.index')
            ->with('success', 'Data Berhasil Di Tambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $wisata = Wisata::findOrFail($id);
        return view('wisatas.show', compact('wisata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wisata = Wisata::findOrFail($id);
        $kategori = Kategori::all();
        $lokasi = Lokasi::all();
        $event = Event::all();
        return view('wisatas.edit', compact('wisata', 'kategori', 'lokasi', 'event'));
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
        $wisata = Wisata::findOrFail($id);
        $wisata->nama_wisata = $request->nama_wisata;
        $wisata->id_kategori = $request->id_kategori;
        $wisata->id_lokasi = $request->id_lokasi;
        $wisata->deskripsi = $request->deskripsi;
        $wisata->cover = $request->cover;
        $wisata->id_event = $request->id_event;

        // upload image
        if ($request->hasFile('cover')) {
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/wisata', $name);
            $wisata->cover = $name;
            
        }
        $wisata->save();

        return redirect()->route('wisata.index')
            ->with('success', 'Data Berhasil Di Ubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wisata = Wisata::findOrFail($id);
        $wisata->delete();

        return redirect()->route('wisata.index')
            ->with('success', 'Data Berhasil Di Hapus!');
    }
}
