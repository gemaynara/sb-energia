<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $table = 'invoices';
    protected $fillable = [
        'user_id',
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

    public function getInvoiceMonthAttribute()
    {
        $monthsName = array('', 'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');
        return $monthsName[$this->attributes['invoice_month']];

    }

    public function getDueDateAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/Y');

    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'user_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
