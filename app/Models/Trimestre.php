<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Trimestre extends Model
{
    use HasFactory;

    public function bulletins():HasMany
    {
        return $this->hasMany(Bulletin::class);
    }
}