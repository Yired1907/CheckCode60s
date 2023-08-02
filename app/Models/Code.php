<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Code extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'expiration_time'
    ];
}
