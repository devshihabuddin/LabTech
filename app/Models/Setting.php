<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable =[
        'title',
        'image',
        'address',
        'email',
        'phone',
        'facebook_url',
        'twitter_url',
        'linkedin_url',
        'instragram_url',
    ];
}
