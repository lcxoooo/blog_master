<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Tags
 *
 * @property integer $id
 * @property string $name
 * @property string $normalized
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Posts[] $posts
 * @method static \Illuminate\Database\Query\Builder|\App\Tags whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Tags whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Tags whereNormalized($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Tags whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Tags whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Tags extends Model
{
    //
    protected $table = 'tags';

    protected $fillable = ['name','normalized'];

    public function posts()
    {
        return $this->belongsToMany('App\Posts', 'posts_tags', 'tag_id', 'post_id');
    }


}
