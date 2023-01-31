<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Goods;
use Illuminate\Http\Request;

class GoodsController extends Controller
{
    public function index(){
        $goods = Goods::all();
        return $this->success($goods);
    }

    public function show($id){
        $good = Goods::find($id);
        $color = $good->types;
        return $this->success($good);
    }

    public function store(Request $request){
        $request = $request->except('_token');
        $goods = new Goods();
        $goods->name =$request['name'];
        $goods->type_id = $request['type_id'];
        $goods->save();
        return $this->success($goods);
    }
}
