<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
  use HasFactory;

  protected $fillable = [
    'equipament_id',
    'user_id',
    'description',
    'limit_date',
    'type'
  ];

  public function user() {
    return $this->belongsTo(User::class);
  }

  public function equipament() {
    return $this->belongsTo(Equipament::class);
  }
}
