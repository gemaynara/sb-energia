<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table= 'clients';
    protected $fillable =[
        'user_id',
        'distributor_id',
        'cpf_cnpj',
        'installation_code',
        'birth',
        'auto_billing',
        'discount',
        'phone',
        'address',
        'zip_code',
        'number',
        'complement',
        'district',
        'city',
        'state',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function invoice(){
        return $this->hasMany(Invoice::class, 'user_id');
    }
}
