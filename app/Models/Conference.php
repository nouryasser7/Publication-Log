<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    use HasFactory;
    protected $table = 'conference';
    public function publications(){
        return $this->hasMany('App\Models\Publication','conf_id','id');
    }
}
