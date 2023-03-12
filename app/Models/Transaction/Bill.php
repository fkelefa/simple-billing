<?php

namespace App\Models\Transaction;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    protected $table = 'bill';

    protected $fillable = [
        'bill_no',
        'date',
        'customer_code',
        'customer_name',
        'grand_total',
    ];
}
