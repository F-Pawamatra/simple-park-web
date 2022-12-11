<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LightMonitoring extends Model
{
    use HasFactory;

    protected $table = 'light_monitoring';
    public $timestamps = false;
    protected $fillable = ['label', 'status'];
}
