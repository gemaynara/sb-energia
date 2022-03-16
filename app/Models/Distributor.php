<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    use HasFactory;

    protected $table= 'distributors';

    protected $fillable =[
        'name',
        'cnpj',
        'value_te',
        'value_tusd',
        'value_icms'
    ];


}
