<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class SinhVien extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'ten_sv',
        'namsinh',
        'email',
        'dia_chi',
    ];
}
