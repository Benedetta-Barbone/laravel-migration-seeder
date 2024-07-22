<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;

    protected $fillable = [
        'azienda',
        'stazione_partenza',
        'stazione_arrivo',
        'orario_partenza',
        'orario_arrivo',
        'codice_treno',
        'numero_carrozze',
        'in_orario',
        'cancellato',
        'tipo_treno',
        'servizi_a_bordo',
    ];
}
