<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Cart extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['user_id','product_id','quantity'];

    public function user(){
        return $this->belongsTo(User::class,'user_id', 'id');
    }

    public function product(){
        return $this->belongsTo(Product::class, 'product_id','id');
    }
}
