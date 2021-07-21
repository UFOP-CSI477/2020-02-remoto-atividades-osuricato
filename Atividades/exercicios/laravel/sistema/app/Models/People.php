<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
  use HasFactory;

  protected $fillable = ['name'];

  public function purchases() {
    return $this->hasMany(Purchases::class);
  }
}
