<?php

namespace App;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
        use Sluggable;
    protected $fillable = [
        'title',
        'description',
        'user_id',
        
        
    ];
    public function sluggable()
        {
            return [
                'slug' => [
                    'source' => 'title'
                ]
            ];
        }
    public function user()
    {
        //User::class == 'App\User'
        return $this->belongsTo(User::class);
    }
    
}
