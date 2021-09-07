<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lesson',
        'grade',
        'subject',
        'date',
        'start_time',
        'end_time',
        'count_questions',
    ];
    // many to many with users
    // many to many with questions
    public function questions()
    {
        return $this->belongsToMany(Question::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
