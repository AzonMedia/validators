<?php

declare(strict_types=1);

namespace Azonmedia\Validators;

class DateValidator
{
    /**
     * @param $yyyy_mm_dd
     * @return bool
     */
    public static function validate_yyyy_mm_dd($yyyy_mm_dd): bool
    {
        return (bool) preg_match('/^\d{4}\-(0[1-9]|1[012])\-(0[1-9]|[12][0-9]|3[01])$/', $yyyy_mm_dd);
    }

}