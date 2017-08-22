<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class STOCK extends Model
{
    public $table = "s_t_o_c_ks";

    protected $fillable=['name','quantity','status'];

    //
    public function productList() {
        return $this->hasMany(product::class);
    }
}
