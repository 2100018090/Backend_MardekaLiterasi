<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Voluntter extends Model
{
    //membuat table voluntter dalam database

    protected $table = "voluntters";

    protected $fillable = [
        "id_akun",
        "nama",
        "jabatan",
        "img"
    ];

    public function akun(){
        return $this->belongsTo(Akun::class, 'id_akun');
    }
}
