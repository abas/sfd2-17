<?php

namespace App\Http\Controllers;
use App\Stand;
use App\Participant;
use Illuminate\Http\Request;

class StandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stand = Stand::All();
        return view('admin.stand',compact('stand'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Stand();
        $data->name = $request->name;
        $data->save();

        return redirect(route('stand'));

    }

    public function addPoint($id, Request $request)
    {
        $isAda = Participant::where('generate_code',$request->generate_code)->exists();
        if($isAda){
            $participant = Participant::where('generate_code','=',$request->generate_code)->get()->first();
            $participant->point = $participant->point + $request->point;
        }else{
            return redirect(route('stand'))->with('isAda','false');
        }
        $participant->update();

        $stand = Stand::find($id);
        $stand->participant = $stand->participant + 1; 
        $stand->update();

        return redirect(route('stand'));

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
