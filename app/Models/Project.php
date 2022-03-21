<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'project';
    public function proposals(){
        return $this->hasMany('App\Models\Proposal','project_id','id');
    }
    public function publications(){
        return $this->hasMany('App\Models\Publication','project_id','id');
    }
    public function collaborators(){
        return $this->hasMany('App\Models\Collaborator','project_id','id');
    }
}
