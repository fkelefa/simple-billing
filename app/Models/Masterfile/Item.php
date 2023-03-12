<?php

namespace App\Models\Masterfile;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'item';

    protected $fillable = [
        'code',
        'name',
        'category_code',
        'price',
        'description',
    ];

    protected $appends = [
        'detail'
    ];

    public function getDetailAttribute()
    {
        return "{$this->code} - {$this->name}";
    }
}
