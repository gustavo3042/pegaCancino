<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;


    protected $fillable = ['encargado','fecha','total','sueldos','terminal','status'];


    public function items(){

        return $this->hasMany(Items::class);
        
              }
}
