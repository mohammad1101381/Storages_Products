<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shop_storage_product extends Model
{
    protected $fillable = ['storage_id' , 'product_id' , 'quantity' , 'description' , 'status'];
}
