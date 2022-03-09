<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'book_name',
        'description',
        'price',
        'image',
        'category_id',

    ];

    public function categories(){
        return $this->belongsTo(Category::class);
    }
}
