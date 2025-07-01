<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['title', 'url', 'icon', 'parent_id'];

    use HasFactory;

    public function children(){
        return $this->hasMany(Menu::class,'parent_id','id')->with('children') ;

    }
}
