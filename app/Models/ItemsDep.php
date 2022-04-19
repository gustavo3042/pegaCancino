<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemsDep extends Model
{
    use HasFactory;


    protected $fillable= ['orders_deps_id','quantity','amount'.'budget'];
}
