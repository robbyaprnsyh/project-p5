<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Lokasi;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $event = Event::all();
        return view('events.index', compact('event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $event = Event::all();
        $lokasi = Lokasi::all();
        return view('events.create', compact('event', 'lokasi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tema_event' => 'required',
            'tgl_diselenggarakan' => 'required',
            'id_lokasi' => 'required'
        ]);

        $event = new Event();
        $event->tema_event = $request->tema_event;
        $event->tgl_diselenggarakan = $request->tgl_diselenggarakan;
        $event->id_lokasi = $request->id_lokasi;
        $event->save();

        return redirect()->route('event.index')
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
        $event = Event::findOrFail($id);
        return view('events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        $lokasi = Lokasi::all();
        return view('events.edit', compact('event', 'lokasi'));
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
        $request->validate([
            'tema_event' => 'required',
            'tgl_diselenggarakan' => 'required',
            'id_lokasi' => 'required'
        ]);

        $event = Event::findOrFail($id);
        $event->tema_event = $request->tema_event;
        $event->tgl_diselenggarakan = $request->tgl_diselenggarakan;
        $event->id_lokasi = $request->id_lokasi;
        $event->save();

        return redirect()->route('event.index')
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
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect()->route('event.index')
            ->with('success', 'Data Berhasil Di Hapus!');
    }
}
