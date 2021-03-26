<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category(){
        return $this->hasOne(Category::class);
    }
    public function setting(){
        return $this->hasOne(Setting::class);
    }
    public function code(){
        return $this->hasOne(Code::class);
    }
    public function post(){
        return $this->hasOne(Post::class);
    }
    public function example(){
        return $this->hasOne(Example::class);
    }
}
