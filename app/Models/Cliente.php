<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = ['id','nombre','apellido','celular'];
 public function asesor()
 {
 return $this->belongsTo(Asesor::class); // Un cliente pertenece a un Asesor
 }

}
