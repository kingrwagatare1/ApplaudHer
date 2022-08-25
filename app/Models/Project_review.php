<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project_reviews extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'projectreviewId',
        'reviews',
        'stars',
        



    ];
}
