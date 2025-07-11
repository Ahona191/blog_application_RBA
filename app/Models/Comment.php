<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Relations\BelongsTo; 
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comment extends Model
{
    use HasFactory; 
     protected $fillable = [
        'content','user_id','post_id'
        
    ];   
    public function user() 
    {
        return $this->belongsTo(User::class);
    } 
     public function Post() 
    {
        return $this->belongsTo(Post::class);
    }

}
