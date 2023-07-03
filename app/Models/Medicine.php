<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;

    protected $fillable = [
        'medicine_name',
        'stock_out',
        'medicine_quantity',
        'medicine_cost',
        'date_of_acquisition',
        'date_of_expiration',
    ];
}
