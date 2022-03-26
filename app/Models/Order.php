<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;
    /**
     * @var array
     */
    protected $fillable = [
        'name','email','address','town','zip','phone','comments','total','cart','user_id', 'order_status'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
    /**
     * One Order has many order details all the information that
     * related to the order stored in the order_details table.
     *
     * @return HasMany
     */
    public function details(){
        return $this->hasMany(OrderDetails::class);
    }
}
