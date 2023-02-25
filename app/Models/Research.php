<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Research extends Model
{
    use HasFactory;

    protected $fillable = [
        'domain',
        'title',
        'abstract',
        'word_file',
        'keywords',
    ];

    protected function keywords(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value,true),
            set: fn ($value) => json_encode($value),
        );
    }

    public function author()
    {
        return $this->belongsToMany(Author::class)->using(AuthorResearch::class);
    }

    public function journal()
    {
        return $this->belongsTo(Journal::class);
    }
}
