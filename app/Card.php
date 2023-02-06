<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = ['name','price','type_id','supplier_id'];
    public function type(){
        return $this->belongsTo(Type::class);
    }
    public  function supplier(){
        return $this->belongsTo(Supplier::class);
    }
}
