<?php

namespace Apackage\Astore\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'productcategories';
    protected $fillable = [
        'name',
        
    ];
}
