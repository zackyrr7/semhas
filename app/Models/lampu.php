<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lampu extends Model
{
    use HasFactory;
    protected $with =['user'];
    protected $fillable =[
        'nama',
        'nomor_hp',
        'PLN',
        'user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
