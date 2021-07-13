<?php
declare(strict_types=1);

namespace Azonmedia\Validators;


class Erc20Validator
{
    /**
     * @param $erc20_address
     * @return bool
     */
    public static function validate_erc20_address($erc20_address): bool
    {
        return (bool) preg_match('/0x+[A-F,a-f,0-9]{40}/', $erc20_address);
    }
}