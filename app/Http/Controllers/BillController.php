<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Masterfile\Item;
use App\Models\Transaction\Bill;
use App\Models\Masterfile\Customer;
use App\Models\Transaction\BillItem;

class BillController extends Controller
{
    public function index()
    {
        $data = [];
        $data['resources'] = Bill::all();
        return view('bill.index', $data);
    }

    public function create()
    {
        $data = [];
        $data['customer_codes'] = Customer::pluck('code', 'code')->toArray();
        $data['item_codes'] = Item::get()->pluck('detail', 'code')->toArray();
        $last_no = Bill::orderBy('id', 'desc')->first();
        $next_no = isset($last_no) ? $last_no->id + 1 : 1;
        $running_no = Str::padLeft($next_no, 5, '0');
        $prefix = 'INV';
        $data['bill_no'] = "{$prefix}{$running_no}";
        return view('bill.create', $data);
    }

    public function store(Request $request)
    {
        $resource = Bill::create([
            'bill_no' => $request['bill_no'],
            'date' => $request['date'],
            'customer_code' => $request['customer_code'],
            'customer_name' => $request['customer_name'],
            'grand_total' => $request['grand_total'],
        ]);

        return redirect()->route('bill.index');
    }

    public function edit($id)
    {
        $resource = Bill::find($id);
        $data = [];
        $data['resource'] = $resource;
        $data['bill_items'] = BillItem::where('bill_no', $resource->bill_no)->orderBy('line_no')->get();
        $data['customer_codes'] = Customer::pluck('code', 'code')->toArray();
        $data['item_codes'] = Item::get()->pluck('detail', 'code')->toArray();

        $data['bill_no'] = $resource->bill_no;
        return view('bill.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $resource = Bill::find($id);
        $resource->update([
            'date' => $request['date'],
            'customer_code' => $request['customer_code'],
            'customer_name' => $request['customer_name'],
            'grand_total' => $request['grand_total'],
        ]);

        for ($i = 1; $i < count($request['item_code']); $i++) {
            $resource_item = BillItem::create([
                'bill_no' => $resource->bill_no,
                'item_code' => $request['item_code'][$i],
                'line_no' => $request['line_no'][$i],
                'quantity' => $request['quantity'][$i],
                'price' => $request['price'][$i],
                'amount' => $request['amount'][$i],
            ]);
        }

        return redirect()->back();
    }

    public function destroy($id)
    {
        $resource = Bill::find($id);
        $resource->delete();
        return redirect()->route('bill.index');
    }
}
