<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Comments
 *
 * @property integer $id
 * @property string $comment
 * @property integer $post_id
 * @property integer $user_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\User $user
 * @property-read \App\Posts $post
 * @method static \Illuminate\Database\Query\Builder|\App\Comments whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Comments whereComment($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Comments wherePostId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Comments whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Comments whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Comments whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Comments extends Model
{
    //
	protected $table = 'comments';

    protected $fillable = ['comment', 'post_id', 'user_id'];

 	public function user() 
	{
		return $this->belongsTo('App\User');
	}

	public function post() 
	{
		return $this->belongsTo('App\Posts');
	}

}
