<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
  protected $table = 'property';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'name', 'price', 'bedrooms','bathrooms','storeys','garages'
  ];

  public function scopeName($query,$key){
     return $query->where('name', 'LIKE', "%$key%");
  }

  public function scopePrice($query,$key1,$key2){
     return $query->where('price', '>=', "$key1")
                  ->where('price', '<=', "$key2");
  }

  public function scopeBedrooms($query,$key){
    return $query->where('bedrooms', '=', "$key");
  }

  public function scopeBathrooms($query,$key){
    return $query->where('bathrooms', '=', "$key");
  }

  public function scopeStoreys($query,$key){
    return $query->where('storeys', '=', "$key");
  }

  public function scopeGarages($query,$key){
    return $query->where('garages', '=', "$key");
  }
}
