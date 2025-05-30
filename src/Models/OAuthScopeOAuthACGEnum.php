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

/**
 * OAuth 2 scopes supported by the API
 */
class OAuthScopeOAuthACGEnum
{
    public const ENUM_FILE_REQUESTSREAD = 'file_requests.read';

    public const ZAHRA = 'zahra';

    public const TEST1 = 'test1';

    public const SELECTION = 'selection';

    private const _ALL_VALUES = [self::ENUM_FILE_REQUESTSREAD, self::ZAHRA, self::TEST1, self::SELECTION];

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
        throw new Exception("$value is invalid for OAuthScopeOAuthACGEnum.");
    }
}
