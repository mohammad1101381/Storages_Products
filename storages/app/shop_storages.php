<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shop_storages extends Model
{
    protected $fillable = ['name' , 'province_id' , 'city_id', 'zone_id', 'location' , 'status' , 'description' , 'manager', 'manager_id','meterage','created_at','updated_at'];

}
