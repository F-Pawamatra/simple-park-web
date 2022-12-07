<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserEntry extends Model
{
    use HasFactory;

    protected $table = 'user_entries';
    protected $fillable = ['rfid_uid', 'id_slot', 'check_in_at', 'check_out_at'];
    public $timestamps = false;
}
