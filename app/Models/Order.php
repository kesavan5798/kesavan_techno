<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table    = 'orders';
    protected $fillable = ['product_id', 'buyer_id', 'seller_id', 'amount','quantity', 'delivery_chrage', 'total_amount'];


    public function product_details(){
        return $this->hasOne('App\Models\Product','id','product_id');
    }

    public function seller_details(){
        return $this->hasOne('App\Models\Users','id','seller_id');
    }

    public function user_details(){
        return $this->hasOne('App\Models\Users','id','buyer_id');
    }
}
