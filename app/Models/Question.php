<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'questionText',
        'type',
        'opt1',
        'opt2',
        'opt3',
        'opt4',
        'correctOpt',
        'answer',
        'lesson',
        'grade',
        'chapter',
        'section',
        'page',
        'level',
        'subject',
        'source',
        'author',
    ];

    public function exams()
    {
        return $this->belongsToMany(Exam::class);
    }
}
