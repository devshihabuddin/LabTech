<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'short_description',
        'image',
        'mission',
        'vision',
        'quality_image'
    ];

    protected $guarded = [];
}
