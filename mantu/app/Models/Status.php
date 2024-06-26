<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    protected $table = 'statuses';
    protected $fillable = ['name'];
    public function projects(){
        return $this->hasMany(Projects::class);
    }
    protected function task(){
        return $this->belongsTo(Task::class);
    }
}
