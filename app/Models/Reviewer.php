<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviewer extends Model
{
    use HasFactory;

    protected $fillable = [
        'speciality',
        'degree',
        'phone',
        'gender',
        'date_of_birth',
    ];

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
    public function journal()
    {
        return $this->belongsToMany(Journal::class)->using(ReviewerJournal::class);
        // return $this->belongsToMany(Journal::class, 'reviewer_journal_tab', 'reviewer_id', 'journal_id')->withTimestamps();
    }
}
