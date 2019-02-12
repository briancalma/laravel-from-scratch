<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	protected $fillable = ['title', 'description']; 

	public function tasks() 
	{
		return $this->hasMany(Task::class);
	}

	public function addTask( array $task ) 
	{
		return $this->tasks()->create( $task );
	}
}
