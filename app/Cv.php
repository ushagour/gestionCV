<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    protected $table ='cvs';
    //
     use SoftDeletes;
     protected $dates =["deleted_at"];
}
