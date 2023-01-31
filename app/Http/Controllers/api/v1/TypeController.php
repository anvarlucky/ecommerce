<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index(){
        $types = Type::all();
        return $this->success($types);
    }

    public function store(Request $request){
        $request = $request->except('_token');
        //dd($request);
        $type = new Type();
        $type->size = $request['size'];
        $type->color = $request['color'];
        $type->save();
        return $this->success($type);
    }
}
