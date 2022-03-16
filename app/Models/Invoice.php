<?php

namespace App\Models;

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

    protected $appends = ['invoice_month'];

    public function getInvoiceMonthAttribute()
    {
        $monthsName = array('', 'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');
        return $monthsName[$this->invoice_month];

    }

    public function client(){
        return $this->belongsTo(Client::class, 'user_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
