<?php

namespace Modules\Otp\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Otp extends Model
{
    use HasFactory;

    const MIN_RANDOM_CODE = 1000000;
    const MAX_RANDOM_CODE = 9999999;

    protected $fillable = [
        "phone_number",
        "code"
    ];

    protected static function newFactory()
    {
        return \Modules\Otp\Database\factories\OtpFactory::new();
    }

    public static function new(): Otp
    {
        return new self();
    }

    public function generateCode(): int
    {
        $code = random_int(self::MIN_RANDOM_CODE, self::MAX_RANDOM_CODE);
        $otp = self::query()->where('code', $code)->first();
        if ($otp) $this->generateCode();
        return $code;
    }
}
