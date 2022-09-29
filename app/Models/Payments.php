<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'type',
        'no_payment',
        'nominal'
    ];

    public function user(){
        return $this->hasOne(User::class,);
    }

}
