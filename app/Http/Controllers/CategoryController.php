<?php

namespace App\Http\Controllers;

use App\Models\Masterfile\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $data = [];
        $data['resources'] = Category::all();
        return view('category.index', $data);
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $resource = Category::create([
            'code' => $request['code'],
            'name' => $request['name'],
        ]);

        return redirect()->route('category.index');
    }

    public function edit($id)
    {
        $data = [];
        $data['resource'] = Category::find($id);
        return view('category.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $resource = Category::find($id);
        $resource->update([
            'code' => $request['code'],
            'name' => $request['name'],
        ]);
        return redirect()->back();
    }

    public function destroy($id)
    {
        $resource = Category::find($id);
        $resource->delete();
        return redirect()->route('category.index');
    }
}
