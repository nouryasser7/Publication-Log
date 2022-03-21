<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Human_Email extends Model
{
    use HasFactory;
    protected $table = 'human_email';
    public function human()
    {
        return $this->belongsTo('App\Models\Human', 'human_id,human_edit', 'id,edit');
    }
    public function email(){
        return $this->belongsTo('App\Models\Email','email_id','id');
    }
}
