<?php

declare(strict_types=1);

/*
 * CypressTestAPILib
 *
 * This file was automatically generated for Newtest by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace CypressTestAPILib\Models;

use Core\Utils\CoreHelper;
use Exception;
use stdClass;

class CustomEnum
{
    public const VALUE1 = 'VALUE1';

    public const VALUE2 = 'VALUE2';

    public const VALUE3 = 'VALUE3';

    private const _ALL_VALUES = [self::VALUE1, self::VALUE2, self::VALUE3];

    /**
     * Ensures that all the given values are present in this Enum.
     *
     * @param array|stdClass|null|string $value Value or a list/map of values to be checked
     *
     * @return array|null|string Input value(s), if all are a part of this Enum
     *
     * @throws Exception Throws exception if any given value is not in this Enum
     */
    public static function checkValue($value)
    {
        $value = json_decode(json_encode($value), true); // converts stdClass into array
        if (CoreHelper::checkValueOrValuesInList($value, self::_ALL_VALUES)) {
            return $value;
        }
        throw new Exception("$value is invalid for CustomEnum.");
    }
}
