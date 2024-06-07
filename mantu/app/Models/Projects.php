<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;
    protected $table = 'projects';
    protected $fillable = ['name','description','start_date','end_date','status_id','categories_id'];
    public function statuses(){
        return $this->hasOne(Status::class,'id','status_id');
    }
    public function categories(){
        return $this->hasOne(Categories::class,'id','categories_id');
    }
}
