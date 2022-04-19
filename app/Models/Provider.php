<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Provider
 *
 * @property $id
 * @property $name
 * @property $email
 * @property $rut
 * @property $address
 * @property $phone
 * @property $created_at
 * @property $updated_at
 *
 * @property Product[] $products
 * @property Purchase[] $purchases
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Provider extends Model
{
    
    static $rules = [
		'name' => 'required',
		'email' => 'required',
		'rut' => 'required',
		'phone' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','email','rut','address','phone'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany('App\Models\Product', 'provider_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function purchase()
    {
        return $this->hasMany('App\Models\Purchase', 'provider_id', 'id');
    }
    

}
