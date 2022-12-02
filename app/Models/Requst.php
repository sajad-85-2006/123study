<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requst extends Model
{
    use HasFactory;
    protected $fillable=['name','phone_Number','email','status_request','user_id','check'];

}
