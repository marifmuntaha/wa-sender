<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class Member extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = ['username', 'fullname', 'email', 'phone', 'address', 'images'];
    public $timestamps  = true;

    protected function password() : Attribute
    {
        return Attribute::make(
            set: fn (string $value) => Hash::make($value)
        );
    }
}
