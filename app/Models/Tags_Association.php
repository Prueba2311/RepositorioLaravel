<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags_Association extends Model
{
    use HasFactory;
    protected $table = 'Tags_Association';
    protected $Association = ['id','id_tags'];
}
