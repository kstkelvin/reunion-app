<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
  protected $fillable = [
      'sala_id', 'user_id', 'hora',
  ];

  public function sala(){
  return $this->belongsTo(Sala::class, 'foreign_key');
}
public function user(){
  return $this->belongsTo(User::class, 'foreign_key');
}
}
