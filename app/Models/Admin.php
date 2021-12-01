<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    
    public function Category(){
        return $this->BelongsTo(Category::class);
    }

    public function User(){
        return $this->BelongsTo(User::class);
    }
}
