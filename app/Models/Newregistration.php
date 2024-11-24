<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newregistration extends Model
{
    use HasFactory;
    protected $table ="newregistrations";
    protected $fillable=['name','username','email','phone','pass','confirmPass','gender'];
    
}
