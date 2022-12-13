<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cairs extends Model
{
    use HasFactory;
    protected $table = 'cairs';
    public function tabungan()
    {
        return $this->belongsTo(Tabungan::class);
    }
}
