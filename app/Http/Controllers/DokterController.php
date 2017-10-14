<?php

namespace App\Http\Controllers;

use App\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
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
        $dokters = Dokter::all();
        return view('dokter.index', ['dokters' => $dokters]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dokter.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        'KodeDkt' => 'required',
        'NamaDkt' => 'required',
        'Spesialis' => 'required',
        'AlamatDkt' => 'required',
        'TeleponDkt' => 'required',
        'KodePlk' => 'required',
        'Tarif' => 'required',
    ]);
        $dokter = new Dokter;

        $dokter->KodeDkt = $request->KodeDkt;
        $dokter->NamaDkt = $request->NamaDkt;
        $dokter->Spesialis = $request->Spesialis;
        $dokter->AlamatDkt = $request->AlamatDkt;
        $dokter->TeleponDkt = $request->TeleponDkt;
        $dokter->KodePlk = $request->KodePlk;
        $dokter->Tarif = $request->Tarif;
        $dokter->save();
        return redirect('dokter');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dokter = Dokter::find($id);
        return view('dokter.single')->with('dokter', $dokter);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dokter = Dokter::find($id);
        return view('dokter.edit')->with('dokter', $dokter);
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
        $this->validate($request, [
        'KodeDkt' => 'required',
        'NamaDkt' => 'required',
        'Spesialis' => 'required',
        'AlamatDkt' => 'required',
        'TeleponDkt' => 'required',
        'KodePlk' => 'required',
        'Tarif' => 'required',
    ]);

        $dokter = Dokter::find($id);
        $dokter->KodeDkt = $request->KodeDkt;
        $dokter->NamaDkt = $request->NamaDkt;
        $dokter->Spesialis = $request->Spesialis;
        $dokter->AlamatDkt = $request->AlamatDkt;
        $dokter->TeleponDkt = $request->TeleponDkt;
        $dokter->KodePlk = $request->KodePlk;
        $dokter->Tarif = $request->Tarif;
        $dokter->save();
        return redirect('dokter');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dokter = Dokter::find($id);
        $dokter->delete();
        return redirect('dokter');
    }
}
