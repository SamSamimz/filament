<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function division() :BelongsTo
    {
        return $this->belongsTo(Division::class);
    }

    public function district() :BelongsTo
    {
        return $this->belongsTo(District::class);
    }

}