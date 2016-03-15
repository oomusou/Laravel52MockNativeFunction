<?php

namespace App\Servives;

class PasswordGeneratorService
{
    /**
     * 產生密碼
     *
     * @param string $origin
     * @param int $length
     * @return string
     */
    public function generate(string $origin, int $length) : string
    {
        $target = str_shuffle($origin);
        return substr($target, 0, $length);
    }
}