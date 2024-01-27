<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $table    = 'customer';
    protected $fillable = ['name', 'email', 'phone_number', 'user_type'];
}
