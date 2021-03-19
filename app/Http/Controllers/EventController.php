<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use RealRashid\SweetAlert\Facades\Alert;


class EventController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = Event::all();
        return view('index', ['event' => $event]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event = new event;

        // CARA PERTAMA
        // event::create([
        //     'event_name' => $request->nama_acara,
        //     'start_event' => $request->tgl_mulai,
        //     'finish_event' => $request->tgl_akhir,
        //     'event_desc' => $request->desc_acara
        // ]);

        //CARA KEDUA
        $event->event_name = $request->nama_acara;
        $event->start_event = $request->tgl_mulai;
        $event->finish_event = $request->tgl_akhir;
        $event->event_desc = $request->desc_acara;
        $event->save();


        // KEMBALI KE HALAMAN FORM TAMBAH DATA
        return redirect()->route('event.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);
        return view('update', ['event' => $event]);
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
        $event = Event::find($id);
        $event->event_name = $request->nama_acara;
        $event->start_event = $request->tgl_mulai;
        $event->finish_event = $request->tgl_akhir;
        $event->event_desc = $request->desc_acara;
        $event->save();

        // KEMBALI KE HALAMAN FORM TAMBAH DATA
        return redirect()->route('event.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(event $event)
    {
        $event->delete();
        return redirect()->route('event.index');
    }
}
