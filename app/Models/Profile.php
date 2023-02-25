<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo',
        'gender',
        'phone',
        'linkedin',
        'address',
        'date_of_birth',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
