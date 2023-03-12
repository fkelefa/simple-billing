<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillItem extends Model
{
    use HasFactory;

    protected $table = 'bill_item';

    protected $fillable = [
        'bill_no',
        'item_code',
        'line_no',
        'quantity',
        'price',
        'amount',
    ];
}
