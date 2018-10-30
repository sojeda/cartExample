<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CheckOut extends Model
{
    protected $fillable = [
        'user_id','total'];
}
