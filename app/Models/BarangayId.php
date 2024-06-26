<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BarangayId extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function permits() : HasMany
    {
        return $this->hasMany(Permit::class, 'user_id');
    }

    public function incidentReports() : HasMany
    {
        return $this->hasMany(IncidentReport::class, 'user_id');
    }
}
