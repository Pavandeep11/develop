<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
    public function parent()
    {
        return $this->belongsTo('App\Category', 'parent_id');
    }

    public function products()
    {
        return $this->belongsToMany('App\Models\Product');
    } 

    public function childrenRecursive()
    {
        // recursively return all children
        return $this->children()->with('childrenRecursive');
    }

}
