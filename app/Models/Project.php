<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'projects';

    protected $fillable = [
        'name',
        'slug',
        'cat_id',
        'image',
        'description', ];

        public function projectCat (){
            return $this->belongsTo(ProjectCat::class,'cat_id','id');
        }
}       

