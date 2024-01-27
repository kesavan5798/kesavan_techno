<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table    = 'product';
    protected $fillable = ['product_name', 'product_description', 'images', 'amount', 'discount', 'seller_id '];

    public function inventory_details(){
        return $this->hasOne('App\Models\Inventory','product_id','id');
    }
    
}
