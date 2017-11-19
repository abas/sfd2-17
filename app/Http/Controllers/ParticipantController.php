<?php

namespace App\Http\Controllers;

use App\Participant;
use App\Barang;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addList()
    {

        $participant = Participant::All();
        return view('admin.festival',compact('participant'));
        // return view('admin.participant');
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
        
        $data = new Participant();
        // Generated Code
        $gen_code = Participant::generated_code($request->username,$request->email,$request->phone);
        $data->generate_code = $gen_code;

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->reason = $request->reason;


        // Save
        $data->save();
        
        return redirect()->back();
    }


    /**
     * Display the field username
     * @param string $username
     */

     public function search_username()
     {
         return view('search_user');
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show_stat($gen_code)
    {
        $barang = Barang::All();
        $gen_codeDec = Participant::decryptIt($gen_code);
        // dd($gen_codeDec);
        $isGenCode_Ada = Participant::where('generate_code',$gen_codeDec)->exists();
        if($isGenCode_Ada){
            $participant = Participant::where('generate_code','=',$gen_codeDec)->get()->first();
            return view('participant_stat',compact('participant','barang'));
        }return redirect(route('cariaku'))->with('message','username not found');
    }

    public function show_stat_cari(Request $request)
    {
        $gen_code = Participant::encryptIt($request->generate_code);
        return redirect(route('show_stat',$gen_code));
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
