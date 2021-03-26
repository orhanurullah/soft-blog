<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return Str::slug($this->title, '-');
    }

    public function parent(){
        return $this->belongsTo(self::class, 'parent_id');
    }
    public function children(){
        return $this->hasMany(self::class, 'parent_id', 'id');
    }
    public function posts(){
        return $this->hasMany(Post::class);
    }

    public function keyword(){
        return $this->belongsTo(Keyword::class);
    }

    public function codes(){
        return $this->hasMany(Code::class);
    }

    public function examples(){
        return $this->hasMany(Example::class);
    }
    public function getParentCategory(){
        if($this->parent_id === 0){
            return $this;
        }else{
            $this->getParentCategory($this->parent);
        }
     }

}
