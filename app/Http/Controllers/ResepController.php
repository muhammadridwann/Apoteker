<?php

namespace App\Http\Controllers;

use App\Resep;
use Illuminate\Http\Request;

class ResepController extends Controller
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
        $reseps = Resep::all();
        return view('resep.index', ['reseps' => $reseps]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resep.create');
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
        'NomorResep' => 'required',
        'TanggalResep' => 'required',
        'KodeDkt' => 'required',
        'KodePsn' => 'required',
        'KodePlk' => 'required',
        'TotalHarga' => 'required',
        'Bayar' => 'required',
        'Kembali' => 'required',
    ]);
        $resep = new Resep;

        $resep->NomorResep = $request->NomorResep;
        $resep->TanggalResep = $request->TanggalResep;
        $resep->KodeDkt = $request->KodeDkt;
        $resep->KodePsn = $request->KodePsn;
        $resep->KodePlk = $request->KodePlk;
        $resep->TotalHarga = $request->TotalHarga;
        $resep->Bayar = $request->Bayar;
        $resep->Kembali = $request->Kembali;
        $resep->save();
        return redirect('resep');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $resep = Resep::find($id);
        return view('resep.single')->with('resep', $resep);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $resep = Resep::find($id);
        return view('resep.edit')->with('resep', $resep);
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
        'NomorResep' => 'required',
        'TanggalResep' => 'required',
        'KodeDkt' => 'required',
        'KodePsn' => 'required',
        'KodePlk' => 'required',
        'TotalHarga' => 'required',
        'Bayar' => 'required',
        'Kembali' => 'required',
    ]);

        $resep = Resep::find($id);
        $resep->NomorResep = $request->NomorResep;
        $resep->TanggalResep = $request->TanggalResep;
        $resep->KodeDkt = $request->KodeDkt;
        $resep->KodePsn = $request->KodePsn;
        $resep->KodePlk = $request->KodePlk;
        $resep->TotalHarga = $request->TotalHarga;
        $resep->Bayar = $request->Bayar;
        $resep->Kembali = $request->Kembali;
        $resep->save();
        return redirect('resep');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $resep = Resep::find($id);
        $resep->delete();
        return redirect('resep');
    }
}
