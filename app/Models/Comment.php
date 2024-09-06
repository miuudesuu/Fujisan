<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
        public function getByLimit(int $limit_count = 10)
        {
            // updated_atで降順に並べたあと、limitで件数制限をかける
            return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->getBylimit();
        } 
        
        public function posts()   
        {
            return $this->hasMany(Post::class);  
        }
                
        protected $fillable = [
                'user_id',
                'post_id',
                'body',
        ];
}
