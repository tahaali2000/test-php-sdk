<?php

declare(strict_types=1);

/*
 * CypressTestAPILib
 *
 * This file was automatically generated for Newtest by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace CypressTestAPILib\Tests\Controllers;

use Core\TestCase\CoreTestCase;
use Core\Types\CallbackCatcher;
use CypressTestAPILib\CypressTestAPIClient;
use CypressTestAPILib\Tests\ClientFactory;
use PHPUnit\Framework\TestCase;

class BaseTestController extends TestCase
{
    /**
     * @var CallbackCatcher Callback
     */
    protected static $callbackCatcher;

    protected function newTestCase($result): CoreTestCase
    {
        return new CoreTestCase($this, self::$callbackCatcher, $result);
    }

    protected static function getClient(): CypressTestAPIClient
    {
        self::$callbackCatcher = new CallbackCatcher();
        return ClientFactory::create(self::$callbackCatcher);
    }
}
