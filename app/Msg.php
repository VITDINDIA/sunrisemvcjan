<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Msg extends Model
{
    //
    protected $fillable=['msg','contact','user_id','guest_name'];
    
}
