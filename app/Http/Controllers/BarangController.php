<?php

namespace App\Http\Controllers;
use App\Barang;
use App\Participant;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::All();
        $participant = Participant::All();
        return view('admin.merchandise',compact('barang','participant'));
    }

    /**
     * send Code @param none
     * 
     */

    public function sendcode()
    {
        
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
        $barang = new Barang();
        $barang->nama_barang = $request->nama_barang;
        $barang->total = $request->total;
        $barang->point = $request->point;
        $barang->save();

        return redirect(route('merchandise'));
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
        //
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
        if(!Participant::where('generate_code',$request->generate_code)->exists()){
            return redirect(route('merchandise'))->with('error',' ');
        }

        if($request->tambahi == 'true'){
            $barang = Barang::find($id);
            $barang->total = $barang->total + 1;
            $barang->update();
        }else if($request->kurangi == 'true'){
            $gencode = $request->generate_code;
            
            $barang = Barang::find($id);
            $barang->total = $barang->total - 1;
            $barang->update();
            
            return redirect(route('min',compact('gencode')));
        }else{
            return redirect(abort(404));
        }return redirect(route('merchandise'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pemain = Barang::find($id);
        $pemain->delete();
        return redirect(route('merchandise'));
    }
}
