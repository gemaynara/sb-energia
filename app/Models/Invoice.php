<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $table = 'invoices';
    protected $fillable = [
        'client_id',
        'invoice_year',
        'invoice_month',
        'consumption',
        'group',
        'reading_date',
        'due_date',
        'extra_value',
        'fare_value',
        'status'
    ];
}
