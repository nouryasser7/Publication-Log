<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collaborator extends Model
{
    use HasFactory;
    protected $table = 'collaborator';
    public function project(){
        return $this->belongsTo('App\Models\Project','project_id,project_edit','id');
    }
}
