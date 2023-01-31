<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Goods;

class Type extends Model
{
    use HasFactory;
    protected $fillable = ['size','color'];

    public function goods(){
        return $this->belongsTo(Goods::class);
    }
}
