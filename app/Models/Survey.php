<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $voted
 * @property mixed $score
 */
class Survey extends Model
{
    use HasFactory;

    public static function boot(): void
    {
        parent::boot();

        static::creating(function ($survey) {
            $survey->link = uniqid();
        });
    }
}
