<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contactu extends Model
{
    use HasFactory;

    const PENDING = 'pendeat';
    const ACTIVE = 'active';
    const INACTIVE = 'inactive';
}
