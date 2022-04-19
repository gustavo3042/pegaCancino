<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sale;

class SaleDetail extends Model
{
    use HasFactory;
    
    protected $fillable = ['sale_id','product_id','quantity','precio','descuento'];


    
   



    public function product(){

        return $this->belongsTo(Product::class);
      }

   
}
