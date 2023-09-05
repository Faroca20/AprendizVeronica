<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asesor extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nombre', 'apellido','celular','cliente_id'];
 public function cliente()
 {
 return $this->hasMany(cliente::class); // Un Asesor tiene muchos clientes
 }

}
