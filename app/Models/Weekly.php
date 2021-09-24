<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weekly extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'rep_id',
        'sale_w_id',
        'target',
        'commission_rate',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'rep_id', 'id');
    }

    public function SaleHistory()
    {
        return $this->hasMany(SalesHistory::class,'week_id','id');
    }
}
