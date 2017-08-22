<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productItem extends Model
{
    public $table = 'product_items';
    protected $fillable=['productId','name','colour','sizeLen','description','price','quantity','image','image2','image3','status'];


    //
    public function product() {
        // return $this->belongsTo(product::class);
        return $this->belongsTo('App\product', 'product_Id');
    }
}

