<?php

namespace Modules\Otp\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Otp extends Model
{
    use HasFactory;

    protected $fillable = [
        "phone_number",
        "code"
    ];

    protected static function newFactory()
    {
        return \Modules\Otp\Database\factories\OtpFactory::new();
    }
}
