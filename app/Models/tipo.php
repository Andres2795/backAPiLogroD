<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class tipo extends Model
{
    use HasApiTokens, HasFactory, Notifiable; //HasApiTokens, Notifiable son agregadas
    public $timestamps=false;
    protected $table = 'tipos';
    protected $fillable = [
        'tipo'
    ];
}
