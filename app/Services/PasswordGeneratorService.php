<?php

namespace App\Servives;

class PasswordGeneratorService
{
    /** @var PasswordGeneratorHelper */
    private $passwordGeneratorHelper;

    /**
     * PasswordGeneratorService constructor.
     * @param PasswordGeneratorHelper $passwordGeneratorHelper
     */
    public function __construct(PasswordGeneratorHelper $passwordGeneratorHelper)
    {
        $this->passwordGeneratorHelper = $passwordGeneratorHelper;
    }

    /**
     * 產生密碼
     *
     * @param string $origin
     * @param int $length
     * @return string
     */
    public function generate(string $origin, int $length) : string
    {
        $target = $this->passwordGeneratorHelper->str_shuffle($origin);
        return substr($target, 0, $length);
    }
}