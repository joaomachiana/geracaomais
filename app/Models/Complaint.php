<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Complaint extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_vitima', 'sexo_vitima', 'provincia_id',
        'distrito', 'data_ocorrencia', 'breve_descricao',
        'contacto_denunciante', 'contacto_vitima', 'informacao_adicional'
    ];

}
