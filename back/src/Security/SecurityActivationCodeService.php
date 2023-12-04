<?php

namespace App\Security;

class ActivationCodeService
{
    const VALIDATION_HOURS = 2;

    public static function generateNewCode()
    {
        return
        [
            'code' => random_int(100000, 999999),
            'expirationDate' => new \DateTime('+ ' . self::VALIDATION_HOURS . 'hour')
        ];
    }
}
