<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarrierForm extends Model
{
    use HasFactory;
    protected $table = 'carrier_forms'; 
    protected $fillable = ['name','location','email','phone','position','salary','date','experience','e_status','resume','r_status','referer_name','referer_email'];
}
