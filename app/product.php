<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public $table = 'products';
    protected $fillable=['stockId','name','description','quantity','featuredImg','status'];

    //
    public function productItems() {
        // return $this->hasMany('app\productItem');
        return $this->hasMany(productItem::class);
    }

    public function stock() {
        return $this->belongsTo(stock::class);
    }
   
}
