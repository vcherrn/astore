<?php

namespace Apackage\Astore\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_Order extends Model
{
    use HasFactory;
    protected $table = "product_order";
    protected $fillable = [
        'order_id',
        'product_id',
        'count',
    ];
}
