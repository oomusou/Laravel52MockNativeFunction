<?php

namespace App\Servives;

class PasswordGeneratorHelper
{
    /**
     * 將原生的str_shuffule()封裝
     *
     * @param string $origin
     * @return string
     */
    public function str_shuffle(string $origin)
    {
        return str_shuffle($origin);
    }
}

