<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    use HasFactory;
    protected $fillable = ['name','type_id'];

    public function types(){
        return $this->hasMany('App\Models\Type','id');
    }
}
