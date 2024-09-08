<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionCategory extends Model
{
    use HasFactory;
        public function questions()   
        {
            return $this->hasMany(Question::class);  
        }
        protected $fillable = [
            'question_id',
            'name',
        ];
}
