<?php
declare(strict_types=1);

namespace Azonmedia\Validators;


class Erc20Validator
{
    /**
     * @param string $erc20_address
     * @return bool
     */
    public static function validate_erc20_address(string $erc20_address): bool
    {
        return (bool) preg_match('/0x+[A-F,a-f,0-9]{40}/', $erc20_address);
    }

    public static function validate_eth_transaction_id(string $eth_transaction_id): bool
    {
        return (bool) preg_match('/^0x([A-Fa-f0-9]{64})$/', $eth_transaction_id);
    }
}