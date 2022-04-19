<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Purchase
 *
 * @property $id
 * @property $provider_id
 * @property $user_id
 * @property $created_at
 * @property $updated_at
 * @property $purchase_date
 * @property $tax
 * @property $total
 * @property $status
 * @property $picture
 *
 * @property Provider $provider
 * @property PurchaseDetail[] $purchaseDetails
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Purchase extends Model
{
    
    static $rules = [
		'provider_id' => 'required',
		'user_id' => 'required',
		'purchase' => 'required',
		'iva' => 'required',
		'total' => 'required',
		'status' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['provider_id','user_id','date','iva','total','status','picture'];


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
        return $this->hasMany('App\Models\PurchaseDetails', 'purchase_id', 'id');
    }

    public function purchaseDetailBodega()
    {
        return $this->hasMany('App\Models\purchaseDetailBodega', 'purchase_id', 'id');
    }

    
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
