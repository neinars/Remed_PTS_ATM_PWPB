<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;
        
    protected $fillable = [
        'user_id',
        'money'
    ];
        public function user()
        {
            return $this->hasOne(User::class);
        }
}
