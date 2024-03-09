<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'subcategory_id',
        'title',
        'slug',
        'model',
        'brand',
        'made_by',
        'image',
        'file',
        'description'
    ];

    //__join with category__//
    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }

    //__Join with sub-category__//
    public function subcategory(){
        return $this->belongsTo(Subcategory::class,'subcategory_id');
    }
}
