<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
        public function getByLimit(int $limit_count = 10)
        {
            // updated_atで降順に並べたあと、limitで件数制限をかける
            return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->getBylimit();
        } 
        
        public function post_category()
        {
            return $this->belongsTo(PostCategory::class);
        }
        
        public function comments()
        {
            return $this->hasMany(Comment::class);
        }
        
        protected $fillable = [
            'user_id',
            'post_category_id',
            'title',
            'body',
        ];
}

