<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;
    protected $table = 'publication';

    public function humans(){
        return $this->belongsToMany('App\Models\Human','_pub_author','publication_id','human_id');
    }
    public function conference(){
        return $this->belongsTo('App\Models\Publication','conf_id','id');
    }
    public function project(){
        return $this->belongsTo('App\Models\Project','project_id','id');
    }
}
