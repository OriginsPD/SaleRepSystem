<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesHistory extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'sales_histories';

    protected $fillable = [
        'rep_id',
        'week_id',
        'rate',
        'sale',
        'sale_date',
    ];

    public function users()
    {
        return $this->belongsTo(User::class,'rep_id','id');
    }

    public function weeklies()
    {
        return $this->belongsTo(Weekly::class, 'week_id', 'id');
    }
}
