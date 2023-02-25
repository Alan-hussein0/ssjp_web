<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = [
        'degree',
        'specialty',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function research()
    {
        return $this->belongsToMany(Research::class)->using(AuthorResearch::class);
    }
}
