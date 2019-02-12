<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['description', 'is_finished'];

    public function event() 
    {
        return $this->belongsTo(Event::class);
    }

    public function complete($is_finished = true) 
    {
        $this->update(compact('is_finished'));
    }

    public function incomplete()
    {
        $this->complete(false);
    }
}
