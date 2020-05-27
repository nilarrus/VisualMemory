<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';
    protected $fillable = ['id'
    ,'name'
    ,'email'
    ,'password'
    ,'foto'
    ,'created_at'
    ,'updated_at'];
}
