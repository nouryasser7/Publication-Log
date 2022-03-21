<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Human extends Model
{
    use HasFactory;
    protected $table = 'human';
    public function publications(){
        return $this->belongsToMany('App\Models\Publication','_pub_author','human_id','publication_id');
    }
    public function human_emails(){
        return $this->hasMany('App\Models\Human_Email','human_id','id');
    }
}
