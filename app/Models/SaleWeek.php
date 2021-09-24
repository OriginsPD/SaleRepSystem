<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleWeek extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'week_name',
        'start_date',
        'end_date',
    ];

    public function weeklies()
    {
        return $this->hasMany(Weekly::class,'sale_w_id','id');
    }

}
