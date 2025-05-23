<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Login extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'email',
        'password'
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];
}
