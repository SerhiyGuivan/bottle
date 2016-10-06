<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Bottle;
use App\Node;

class BottlesCtrl extends Controller
{
    public function index(){

        $bottle = Bottle::inRandomOrder()
            ->first();
        $bottle->nodes;

        return $bottle;
    }

    public function store(Request $request){

        $node = new Node($request->all());

        $bottle = new Bottle();

        $bottle->save();

        $bottle->nodes()->save($node);
    }

    public function update(Request $request, $id){

        $node = new Node($request->all());

        $bottle = Bottle::find($id);

        $bottle->nodes()->save($node);
    }
}
