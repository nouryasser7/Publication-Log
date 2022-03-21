<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    use HasFactory;
    protected $table = 'action';
    public function events(){
        return $this->hasMany('App\Models\Event','action_id','id');
    }
}
