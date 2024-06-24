<?php

namespace App\Helpers\Utilities;

class RandomGenerator
{
    public static function generateRandomNumber(int $digits, bool $strict = false)
    {
        return fake()->randomNumber($digits, $strict);
    }

    public static function generateUsernameFromEmail(string $email, bool $withRandomNumber = false)
    {
        return $withRandomNumber ? (explode('@', $email)[0] . self::generateRandomNumber(3, true)) : explode('@', $email)[0];
    }

    public static function generateRandomColor() {
        return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
    }
}