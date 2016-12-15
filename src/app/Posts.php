<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Posts
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property boolean $active
 * @property integer $user_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property integer $category_id
 * @property string $markdown_content
 * @property-read \App\User $user
 * @property-read \App\Categories $category
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Tags[] $tags
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Comments[] $comments
 * @method static \Illuminate\Database\Query\Builder|\App\Posts whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Posts whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Posts whereContent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Posts whereActive($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Posts whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Posts whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Posts whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Posts whereCategoryId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Posts whereMarkdownContent($value)
 * @mixin \Eloquent
 */
class Posts extends Model
{
    //
	protected $table = 'posts';

    protected $fillable = ['title', 'content', 'active', 'user_id','category_id','markdown_content'];

	public function user() 
	{
		return $this->belongsTo('App\User');
	}

	public function category() 
	{
		return $this->belongsTo('App\Categories');
	}

	public function tags()
    {
        return $this->belongsToMany('App\Tags', 'posts_tags', 'post_id', 'tag_id');
    }

    public function comments() 
    {
      return $this->hasMany('App\Comments','post_id');
    }
}
