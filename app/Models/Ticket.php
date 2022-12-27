<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable =[
        'ticket',
        'registrado_por',
        'equipo',
        'ip',
        'user_id',
        'completado',
        'descripcion_problema',
        'descripcion_resolucion',
    ];
}
