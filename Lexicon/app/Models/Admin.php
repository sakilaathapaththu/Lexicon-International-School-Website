<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable; 

class Admin extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    
    protected $guard = 'admin';

    protected $fillable = [
        'username', 'email', 'password', 'fullName', 'profileImage',
        'role', 'phone', 'status', 'last_login',
    ];

    protected $hidden = ['password'];
}