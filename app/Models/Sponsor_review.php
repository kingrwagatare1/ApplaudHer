<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sponsor_reviews extends Model
{
    use HasFactory;

    protected $fillable = [
        'projectReviewId',
        'sponsorId',
        'reviews',
        'stars',



    ];
}
