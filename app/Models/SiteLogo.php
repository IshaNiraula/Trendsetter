<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteLogo extends Model
{
    use HasFactory;
    protected $table = 'site_logos';
    protected $fillable = ['image'];
}
