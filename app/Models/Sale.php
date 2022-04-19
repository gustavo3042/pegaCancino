<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sale
 *
 * @property $id
 * @property $client_id
 * @property $user_id
 * @property $sale_date
 * @property $tax
 * @property $total
 * @property $status
 * @property $created_at
 * @property $updated_at
 *
 * @property Client $client
 * @property SaleDetail[] $saleDetails
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sale extends Model
{

    static $rules = [
		'user_id' => 'required',
		'date' => 'required',
		'iva' => 'required',
		'total' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['client_id','user_id','date','iva','total','totalSinDesc','status'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function client()
    {
        return $this->hasOne('App\Models\Client', 'id', 'client_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
 
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }


    public function saleDetails(){

        return $this->hasMany(SaleDetail::class);
        
              }

              public function saleDetailsBodega(){

                return $this->hasMany(SaleDetailBodega::class);
                
                      }

}
