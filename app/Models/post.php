<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
   
class post extends Model
{
    
    //الاعمده القابله للكتابه
    protected $fillable=['id','name','DOB'];
}
