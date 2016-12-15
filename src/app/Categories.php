<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Categories
 *
 * @property integer $id
 * @property string $name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Posts[] $posts
 * @method static \Illuminate\Database\Query\Builder|\App\Categories whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Categories whereName($value)
 * @mixin \Eloquent
 */
class Categories extends Model
{
    //
    protected $table = 'categories';

    protected $fillable = ['name'];

    public $timestamps = false;

    public function posts() 
    {
      return $this->hasMany('App\Posts','category_id');
    }
}
