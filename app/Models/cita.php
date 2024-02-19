<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class cita extends Model
{
    use HasApiTokens, HasFactory, Notifiable; //HasApiTokens, Notifiable son agregadas
    public $timestamps=false;
    protected $table = 'citas';
    protected $fillable = [
        'personaid',
        'medico',
        'fechaCita',

    ];
}
