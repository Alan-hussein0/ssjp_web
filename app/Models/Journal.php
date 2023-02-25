<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subject',
        'issn',
        'email',
        'created_date',
    ];

    public function reviewer()
    {
        return $this->belongsToMany(Reviewer::class)->useing(ReviewerJournal::class);
    }

    public function editor()
    {
        return $this->hasMany(Editor::class);
    }

    public function research()
    {
        return $this->hasMany(Research::class);
    }
}
