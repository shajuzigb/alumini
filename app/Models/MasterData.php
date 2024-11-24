<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Support\Facades\DB;

class MasterData extends Model
{
    use HasFactory;
    protected $table  ="master_datas";
    protected $fillable=['id','parent','value'];

}
