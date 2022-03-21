<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $table = 'event';
    public function action(){
        return $this->belongsTo('App\Models\Action','action_id','id');
    }
    public function proposals(){
        return $this->belongsToMany('App\Models\Proposal','event_proposal','event_id','proposal_id');
    }
}
