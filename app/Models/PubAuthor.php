<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PubAuthor extends Model
{
    use HasFactory;
    protected $table = '_pub_author';
    protected $primaryKey = "human_id";

}
