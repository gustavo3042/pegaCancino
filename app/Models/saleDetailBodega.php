<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleDetailBodega extends Model
{
    protected $fillable = ['sale_id','bodega_id','quantity','precio','descuento'];
    //  use HasFactory;
  
  
    public function bodega(){
  
      return $this->belongsTo(bodega::class);
    }
}
