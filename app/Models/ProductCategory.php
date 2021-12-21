<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCategory extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'product_categories';

    public function product(){
        return $this->belongsTo(Product::class, 'id','product_id');
    }

    public function categories(){
        return $this->belongsTo(Category::class, 'id','category_id');
    }
}
