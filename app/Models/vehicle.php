<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehicle extends Model
{
    use HasFactory;
    protected $primaryKey = 'vehicle_id';
    // キャストしました
    protected $casts = ['capacities' => 'json'];
}
