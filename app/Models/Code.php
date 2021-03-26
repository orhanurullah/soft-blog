<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Code extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function keyword(){
        return $this->belongsTo(Keyword::class);
    }
    public function examples(){
        return $this->hasMany(Example::class);
    }
}
