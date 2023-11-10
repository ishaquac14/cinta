<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Physical extends Model
{
    use HasFactory;

    protected $fillable = ['host', 'storage', 'hdd1', 'hdd2', 'note'];
    
}
