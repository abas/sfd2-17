<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stand extends Model
{
    protected $table = 'stand';
    protected $guard = [];

    protected $fillable = [
        'name','participant','active_stand'
    ];

    public static function addParticipant($id)
    {
        return Participant::find($id)->participant + 1;
    }

    public static function totParticipant($id)
    {
        return Participant::find($id)->participant;
   
    }

    public static function addPoint($request, $id_participant)
    {
        $participant = Participant::find($id_participant);
        $participant->point = $participant->point + $request->point;
        return $participant;
    }
}
