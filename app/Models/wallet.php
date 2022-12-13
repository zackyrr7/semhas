<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wallet extends Model
{
    use HasFactory;
    protected $with =['user'];
    protected $fillable =[
        'nama',
        'nomor_hp',
        'jenis',
        'no_wallet',
        'total',
        'user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
