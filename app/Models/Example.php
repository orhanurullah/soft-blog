<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Example extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return Str::slug($this->title, '-');
    }

    public function keyword(){
        return $this->belongsTo(Keyword::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function code(){
        return $this->belongsTo(Code::class);
    }

    public function post(){
        return $this->belongsTo(Post::class);
    }
}
