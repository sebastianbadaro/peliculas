<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Genre;
use App\Actor;
class Movie extends Model
{
  protected $fillable = ['title' ,  'rating' ,  'awards',  'length' ,'release_date','genre_id' ];

  public function genre()
  {
    return $this->belongsTo(Genre::class);
  }

  public function actors()
  {
    return $this->belongsToMany(Actor::class,'actor_movie','movie_id','actor_id');
    // ver que pasa cuando uno elige 18 - Carroza de fuego en nueva pelicula
  }
}
