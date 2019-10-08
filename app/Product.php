<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $primarykey = 'id';
    public $timestamps = true;
    //
    protected $table = 'products';

    public function user(){
        // A product created/edited by a user
        return $this->belongsTo('App\User');
    }
}
