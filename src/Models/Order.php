<?php

namespace Apackage\Astore\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = "orders";
    protected $fillable = [
        'user_id',
        'town',
        'area',
        'street',
        'house',
        'apartment',
        'phone_number',
       
    ];
}
