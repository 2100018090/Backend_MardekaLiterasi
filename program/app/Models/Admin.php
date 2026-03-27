<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //membuat tabel admin di database

    protected $table = "admins";

    protected $fillable = [
        "id_akun",
        "nama",
        "alamat",
        "notlp",
        "img"
    ];

    public function akun(){
        return $this->belongsTo(Akun::class, 'id_akun');
    }

}
