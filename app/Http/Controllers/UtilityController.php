<?php

namespace App\Http\Controllers;

use App\Models\Masterfile\Customer;
use App\Models\Masterfile\Item;
use Illuminate\Http\Request;

class UtilityController extends Controller
{
    public function selectCustomer(Request $request)
    {
        $resource = Customer::where('code', $request['customer_code'])->first();
        $data = [];
        $data['resource'] = $resource;
        return response()->json($data);
    }

    public function selectItem(Request $request)
    {
        $resource = Item::where('code', $request['item_code'])->first();
        $data = [];
        $data['resource'] = $resource;
        return response()->json($data);
    }
}
