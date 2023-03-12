<?php

namespace App\Http\Controllers;

use App\Models\Masterfile\Salesman;
use Illuminate\Http\Request;

class SalesmanController extends Controller
{
    public function index()
    {
        $data = [];
        $data['resources'] = Salesman::all();
        return view('salesman.index', $data);
    }

    public function create()
    {
        return view('salesman.create');
    }

    public function store(Request $request)
    {
        $resource = Salesman::create([
            'code' => $request['code'],
            'name' => $request['name'],
            'description' => $request['description'],
        ]);

        return redirect()->route('salesman.index');
    }

    public function edit($id)
    {
        $data = [];
        $data['resource'] = Salesman::find($id);
        return view('salesman.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $resource = Salesman::find($id);
        $resource->update([
            'code' => $request['code'],
            'name' => $request['name'],
            'description' => $request['description'],
        ]);

        return redirect()->back();
    }

    public function destroy($id)
    {
        $resource = Salesman::find($id);
        $resource->delete();
        return redirect()->route('salesman.index');
    }
}
