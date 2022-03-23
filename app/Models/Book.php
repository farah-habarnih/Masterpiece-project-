<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    use HasFactory;
      /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
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
