<?php

namespace Apackage\Astore\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class User_Product extends Model
{
    use HasFactory;
    protected $table = "user_product";
    protected $fillable = [
        'user_id',
        'product_id',
        'count',
    ];

    public static function getTotal(){
        $products = Product::join('user_product', 'products.id' , '=', 'user_product.product_id')->where('user_product.user_id',1)->get();
        $sum = 0;
        foreach($products as $product){
            $sum += $product->price * $product->count;
        }
        return $sum;
    }
}