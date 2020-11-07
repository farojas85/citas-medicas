<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $fillable=[
        'id','tipo_documento_id','numero_documento','nombres',
        'apellidos','sexo','telefono','direccion'
    ];

    public function TipoDocumento()
    {
        return $this->belongsTo(TipoDocumento::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
