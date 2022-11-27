<?php

namespace App\Models;

use App\View\Components\category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'active', 'price'];

   
    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }
}
