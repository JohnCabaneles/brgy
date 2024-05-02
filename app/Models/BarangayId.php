<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangayId extends Model
{
    use HasFactory;

    protected $fillable = [
        'name' => 'string|required',
        'email' => 'string|required',
        'address' => 'string|required',
        'contact_number' => 'integer|required',
    ];
}
