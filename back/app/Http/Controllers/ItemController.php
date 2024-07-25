<?php

namespace App\Http\Controllers;


use App\Models\Item;
use App\Http\Requests\ItemRequest;
use App\Http\Resources\ItemResource;

class ItemController extends Controller
{
    public function list(){
        return ItemResource::collection(Item::all());
    }

    public function create(ItemRequest $request){
        $item = Item::create($request->validated());
        return $item;
    }

    public function delete(Item $item){
        $id = $item->id;
        $item->delete();
        return $id;
    }
}
