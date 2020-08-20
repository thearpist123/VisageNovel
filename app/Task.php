<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'assignee_id', 'project_id'
    ];

    public function project() {
        return $this->belongsTo('App\Project');
    }

    public function assignee() {        
        return $this->belongsTo('App\User');
    }

}
