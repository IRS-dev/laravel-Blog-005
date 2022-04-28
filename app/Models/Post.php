<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Sluggable,HasFactory;

    // protected $fillable = [
    //     'title', 'excerpt', 'body'
    // ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    protected $guarded = ['id'];
    protected $with = ['category','author'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(user::class, 'user_id');
    }

    public function scopeFilter($query, array $filters)
    {
        
        

        $query->when($filters['search'] ?? false,function($query ,$search){
            return  $query->where('title','like','%'. $search . '%')
                            ->orwhere('body','like','%'. $search . '%');
        });
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}