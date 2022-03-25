<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


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

    public function category(){
        return $this->belongsTo(Category::class);
    }

     /**
     *
     * @return BelongsToMany
     */
    public function order_details()
    {
        return $this->belongsToMany(OrderDetails::class);
    }
}
