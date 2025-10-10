<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable=[
'fname',
'lname',
'gender',
'address',
'email',
'phone',
'category',
    ];
}
