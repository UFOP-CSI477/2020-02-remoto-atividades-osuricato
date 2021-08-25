<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
  use HasFactory;

  protected $fillable = [
    'pessoa_id',
    'unidade_id',
    'vacina_id',
    'dose',
    'data'
  ];

  public function pessoa() {
    return $this->belongsTo(Pessoa::class);
  }

  public function unidade() {
    return $this->belongsTo(Unidade::class);
  }

  public function vacina() {
    return $this->belongsTo(Vacina::class);
  }
}
