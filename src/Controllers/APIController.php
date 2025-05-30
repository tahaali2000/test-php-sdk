<?php

declare(strict_types=1);

/*
 * CypressTestAPILib
 *
 * This file was automatically generated for Newtest by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace CypressTestAPILib\Controllers;

use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use CypressTestAPILib\Http\ApiResponse;
use CypressTestAPILib\Models\Item;
use CypressTestAPILib\Models\MultipleArraysRequest;
use CypressTestAPILib\Models\Status3Enum;
use CypressTestAPILib\Models\TokensRequest;

class APIController extends BaseController
{
    /**
     * Generates a new OAuth token with the specified scopes.
     *
     * @param TokensRequest|null $body
     *
     * @return ApiResponse Response from the API call
     */
    public function createOAuthToken(?TokensRequest $body = null): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/tokens')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Bad request'))
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Creates a new resource in the system.
     *
     *
     * @param string $status The status of the items to filter by.
     * @param Item|null $body Custom model with additional properties
     *
     * @return ApiResponse Response from the API call
     */
    public function createanitem(string $status, ?Item $body = null): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/items/{status}')
            ->parameters(
                TemplateParam::init('status', $status)->required()->serializeBy([Status3Enum::class, 'checkValue']),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Bad Syntax'))
            ->throwErrorOn('401', ErrorType::init('Unauthorized'))
            ->throwErrorOn('403', ErrorType::init('Permission Denied'))
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * @param string $id The ID of the item to retrieve
     * @param string $value The value of the item to retrieve
     *
     * @return ApiResponse Response from the API call
     */
    public function getanitembyID(string $id, string $value): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/items/{id}')
            ->parameters(TemplateParam::init('id', $id)->required(), QueryParam::init('value', $value)->required());

        $_resHandler = $this->responseHandler()->type(Item::class)->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This endpoint accepts a complex structure with multiple arrays.
     *
     * @param MultipleArraysRequest|null $body
     *
     * @return ApiResponse Response from the API call
     */
    public function testEndpointwithArrays(?MultipleArraysRequest $body = null): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/multiple-arrays')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Bad request'))
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
