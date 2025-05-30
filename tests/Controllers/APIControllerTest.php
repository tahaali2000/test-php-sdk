<?php

declare(strict_types=1);

/*
 * CypressTestAPILib
 *
 * This file was automatically generated for Newtest by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace CypressTestAPILib\Tests\Controllers;

use CypressTestAPILib\Controllers\APIController;
use CypressTestAPILib\Exceptions;

class APIControllerTest extends BaseTestController
{
    /**
     * @var APIController APIController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getAPIController();
    }

    public function testCreateOAuthToken()
    {
        // Parameters for the API call
        $body = null;

        // Perform API call
        try {
            self::$controller->createOAuthToken($body)->getResult();
        } catch (Exceptions\ApiException $e) {
        }

        // Assert result with expected response
        $this->newTestCase(null)->expectStatus(201)->assert();
    }

    public function testTestEndpointwithArrays()
    {
        // Parameters for the API call
        $body = null;

        // Perform API call
        try {
            self::$controller->testEndpointwithArrays($body)->getResult();
        } catch (Exceptions\ApiException $e) {
        }

        // Assert result with expected response
        $this->newTestCase(null)->expectStatus(200)->assert();
    }
}
