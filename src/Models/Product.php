<?php

namespace Apackage\Astore\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'category_id',
        'warehouse_id',
        'diller_id',
        'price',
        'description',
        'photo',
    ];
}
