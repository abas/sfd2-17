<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $fillable = [
        'nama_barang','total','point'
    ];

    public static function kurangi($id)
    {
        $barang = $this->find($id);
        $barang->total = $barang->total - 1;
        $barang->update();
    }
    public static function tambahi($id)
    {
        $barang = $this->find($id);
        $barang->total = $barang->total + 1;
        $barang->update();
    }
}
