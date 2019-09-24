<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //

	 // protected $fillable = ['title', 'description', 'url'];



    protected $table = 'project';	
	protected $guarded = [];

	public function getRouteKeyName()
	{


	 	return 	'url';
 }



}
