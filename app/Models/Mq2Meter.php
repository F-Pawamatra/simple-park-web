<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mq2Meter extends Model
{
    use HasFactory;

    protected $table = 'mq2_meters';
    protected $fillable = ['co_ppm', 'smoke_pmm', 'at'];
}
