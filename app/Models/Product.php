<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $id
 * @property $name
 * @property $barcode
 * @property $color
 * @property $stock
 * @property $totalObillos
 * @property $image
 * @property $brand
 * @property $price
 * @property $status
 * @property $category_id
 * @property $provider_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Category $category
 * @property Provider $provider
 * @property PurchaseDetail[] $purchaseDetails
 * @property SaleDetail[] $saleDetails
 * @property SaleDetail[] $saleDetails
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{
    
    static $rules = [
		'color' => 'required',
		'stock' => 'required',
	
    //    'image' => 'required',
	//	'brand' => 'required',
		'price' => 'required',
		'status' => 'required',
    ];

    protected $perPage = 45;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
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
    public function saleDetails()
    {
        return $this->hasMany('App\Models\SaleDetail', 'quantity', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
   

}
