<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;
    protected $table = 'email';
    public function human_email(){
        return $this->hasOne('App\Models\Human_Email','email_id','id');
    }
}
