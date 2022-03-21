<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;
    protected $table = 'proposal';
    public function project(){
        return $this->belongsTo('App\Models\Project','project_id','id');
    }
    public function events(){
        return $this->belongsToMany('App\Models\Event','event_proposal','proposal_id','event_id');
    }
}
