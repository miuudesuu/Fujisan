<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
        public function question_category()
        {
            return $this->belongsTo(QuestionCategory::class);
        }
        public function answers()
        {
            return $this->hasMany(Answer::class);
        }
        
        protected $fillable = [
            'user_id',
            'question_category_id',
            'title',
            'body',
        ];
}
