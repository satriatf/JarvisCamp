<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = ['name'];
    public function projects(){
        return $this->hasMany(Projects::class);
    }
    protected function task(){
        return $this->hasMany(Task::class);
    }
}
