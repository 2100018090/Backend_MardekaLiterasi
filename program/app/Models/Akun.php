<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    //membuat tabel akun untuk database

    protected $table = "akuns";

    protected $fillable = [
        'email',
        'username',
        'password',
        'role'
    ];

    //Relasi
    public function admin(){
        return $this->hasOne(Admin::class, "id_akun");
    }

    public function anggota(){
        return $this->hasOne(Anggota::class, "id_akun");
    }

    public function voluntter(){
        return $this->hasOne(Voluntter::class, "id_akun");
    }
}
