<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class persona extends Model
{
    use HasApiTokens, HasFactory, Notifiable; //HasApiTokens, Notifiable son agregadas
    public $timestamps=false;
    protected $table = 'personas';
    protected $fillable = [
        'nombre',
        'apellido',
        'cedula',
        'email',
        'telefono',
        'especialidad',
        'tipoid'
    ];
}
