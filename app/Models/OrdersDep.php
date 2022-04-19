<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdersDep extends Model
{
    use HasFactory;


    protected $fillable = ['encargado','fecha','total','status'];
}
