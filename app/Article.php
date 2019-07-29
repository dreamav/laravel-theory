<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
	
    
}
