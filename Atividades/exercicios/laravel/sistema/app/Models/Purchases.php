<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchases extends Model
{
  use HasFactory;

  protected $fillable = ['name', 'people_id', 'product_id', 'date'];

  public function people() {
    return $this->belongsTo(People::class);
  }

  public function products() {
    return $this->belongsTo(Product::class);
  }
}
