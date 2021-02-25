<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NetworkProvidentem extends Model
{
    use HasFactory;

    const PENDING = 'pendeat';
    const ACTIVE = 'active';
    const INACTIVE = 'inactive';
}
