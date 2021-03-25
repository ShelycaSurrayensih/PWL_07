<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;  //Model Eloquent

class Mahasiswa extends Model{
    protected $table="mahasiswa";
    public $timestamps= false;
    protected $primaryKey = 'nim';

    /**
     * The attributes that are mass assignable. *
     * @var array
     */

    protected $fillable = [
        'nim',
        'nama',
        'tanggal_lahir',
        'kelas',
        'jurusan',
        'no_handphone',
        'email',
    ];

}
