<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseDetailBodega extends Model
{
   //  use HasFactory;

   protected $fillable = ['purchase_id','bodega_id','quantity','price'];


   public function purchase(){
 
     return $this->belongsTo(Purchase::class);
     
     
     }
     
     public function bodega(){
     
       return $this->belongsTo(Bodega::class);
     }
 
}
