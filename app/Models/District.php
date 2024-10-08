<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class District extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function division() :BelongsTo
    {
        return $this->belongsTo(Division::class);
    }

    public function employees() :HasMany
    {
        return $this->hasMany(Employee::class);
    }

}