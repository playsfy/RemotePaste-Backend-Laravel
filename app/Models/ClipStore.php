<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClipStore extends Model
{
    use HasFactory;

    protected $fillable = ['userId', 'clipups' ];
}
