<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\PostsTags
 *
 * @property integer $id
 * @property integer $post_id
 * @property integer $tag_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\PostsTags whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\PostsTags wherePostId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\PostsTags whereTagId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\PostsTags whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\PostsTags whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PostsTags extends Model
{
    //
    protected $table = 'posts_tags';

    protected $fillable = ['post_id','tag_id'];
}
