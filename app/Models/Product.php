<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'products';

    public function category(){
        return $this->hasOneThrough(Category::class,ProductCategory::class);
    }

    public function cart(){
        return $this->hasMany(Cart::class);
    }
}
