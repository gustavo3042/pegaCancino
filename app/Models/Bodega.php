<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bodega extends Model
{
   // use HasFactory;


   static $rules = [
    'color' => 'required',
    'stock' => 'required',
  //  'image' => 'required',
    //'brand' => 'required',
    'price' => 'required',
    'status' => 'required',
];

protected $perPage = 45;

protected $fillable = ['name','barcode','color','stock','price','status','category_id','provider_id'];


 /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne('App\Models\Category', 'id', 'category_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function provider()
    {
        return $this->hasOne('App\Models\Provider', 'id', 'provider_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function purchaseDetails()
    {
        return $this->hasMany('App\Models\PurchaseDetail', 'product_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function saleDetailsBodega()
    {
        return $this->hasMany('App\Models\SaleDetailBodega', 'quantity', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
   

}
