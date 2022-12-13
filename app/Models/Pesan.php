<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;
    protected $with =['user'];
    protected $fillable =[
        'nama',
        'barang',
        'nomor_hp',
        'alamat',
        'tanggal',
        'user_id'
       
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}