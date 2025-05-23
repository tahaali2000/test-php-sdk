<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models;

/**
 * Electronic Commerce Indicator (ECI). The ECI value is part of the 2 data elements that indicate the
 * transaction was processed electronically. This should be passed on the authorization transaction to
 * the Gateway/Processor.
 */
class ECIFlag
{
    public const MASTERCARD_NON_3D_SECURE_TRANSACTION = 'MASTERCARD_NON_3D_SECURE_TRANSACTION';

    public const MASTERCARD_ATTEMPTED_AUTHENTICATION_TRANSACTION = 'MASTERCARD_ATTEMPTED_AUTHENTICATION_TRANSACTION';

    public const MASTERCARD_FULLY_AUTHENTICATED_TRANSACTION = 'MASTERCARD_FULLY_AUTHENTICATED_TRANSACTION';

    public const FULLY_AUTHENTICATED_TRANSACTION = 'FULLY_AUTHENTICATED_TRANSACTION';

    public const ATTEMPTED_AUTHENTICATION_TRANSACTION = 'ATTEMPTED_AUTHENTICATION_TRANSACTION';

    public const NON_3D_SECURE_TRANSACTION = 'NON_3D_SECURE_TRANSACTION';
}
