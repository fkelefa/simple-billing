<?php

namespace App\Http\Controllers;

use App\Models\Masterfile\Category;
use App\Models\Masterfile\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $data = [];
        $data['resources'] = Item::all();
        return view('item.index', $data);
    }

    public function create()
    {
        $data = [];
        $data['category_codes'] = Category::pluck('code', 'code')->toArray();
        return view('item.create', $data);
    }

    public function store(Request $request)
    {
        $resource = Item::create([
            'code' => $request['code'],
            'name' => $request['name'],
            'category_code' => $request['category_code'],
            'price' => $request['price'],
            'description' => $request['description'],
        ]);

        return redirect()->route('item.index');
    }

    public function edit($id)
    {
        $data = [];
        $data['resource'] = Item::find($id);
        return view('item.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $resource = Item::find($id);
        $resource->update([
            'code' => $request['code'],
            'name' => $request['name'],
            'category_code' => $request['category_code'],
            'price' => $request['price'],
            'description' => $request['description'],
        ]);

        return redirect()->back();
    }

    public function destroy($id)
    {

        $resource = Item::find($id);
        $resource->delete();

        return redirect()->route('item.index');
    }
}
