<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $table = 'participant';
    protected $guard = [];
    protected $fillable = [
        'nama','username','email','phone','reason','point'
    ];
    
    public static function generated_code($username,$password,$email)
    {
        return (string)rand((date("s")),rand(100,200)).substr($email,0,1).substr($username,-2).substr($password,-1);
    }


    public static function encryptIt( $q ) {
        $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
        $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
        return( $qEncoded );
    }

    public static function decryptIt( $q ) {
        $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
        $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
        return( $qDecoded );
    }

    public static function isAdaUser($id)
    {
        $participant = Participant::All();
        $ada = false;
        foreach($participant as $data){
            if($data->username == Participant::find($id)->username){
                $ada = true;
            }
        }
        return ada;
    }
}
