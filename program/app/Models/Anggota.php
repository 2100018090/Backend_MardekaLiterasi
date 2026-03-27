<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    //membuat tabel anggota di database

    protected $table = "anggotas";

    protected $fillable = [
        "id_akun",
        "nama",
        "alamat",
        "notlp",
        "img"
    ];

    public function akun(){
        return $this->belongsTo(Akun::class, "id_akun");
    }
}
