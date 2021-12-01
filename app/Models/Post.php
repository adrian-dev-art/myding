<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Cviebrock\EloquentSluggable\Sluggable;
use Carbon\Carbon;

class Post extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = [
        'id'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function Category(){
        return $this->BelongsTo(Category::class);
    }

    public function User(){
        return $this->BelongsTo(User::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

 

}
