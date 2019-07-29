<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Article
 *
 * @property int $id
 * @property string $name
 * @property string $text
 * @property string $img
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string $alias
 * @property \Carbon\Carbon|null $deleted_at
 * @property int $user_id
 * @property-read \App\User $user
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Article onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Article whereAlias($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Article whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Article whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Article whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Article whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Article whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Article whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Article whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Article whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Article withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Article withoutTrashed()
 * @mixin \Eloquent
 */
class Article extends Model
{
    
    use SoftDeletes;
    //
    
	//protected $table = 'articles';
	
	protected $primaryKey = 'id';
	public $incrementing = TRUE;
	
	public $timestamps = TRUE;
	
	
	protected $fillable = ['name','text'];
	
	protected $guarded = ['*'];
	
	protected $dates = ['deleted_at'];
	
	
	
	public function user() {
		return $this->belongsTo('App\User');
	}	
    
}
