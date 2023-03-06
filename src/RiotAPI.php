<?php

namespace Riot;

use Curl\Curl;
use Riot\Exception\BadGatewayException;
use Riot\Exception\BadRequestException;
use Riot\Exception\DataNotFoundException;
use Riot\Exception\ForbiddenException;
use Riot\Exception\GatewayTimeoutException;
use Riot\Exception\InternalServerErrorException;
use Riot\Exception\MethodNotAllowedException;
use Riot\Exception\RateLimitExceededException;
use Riot\Exception\ServiceUnavailableException;
use Riot\Exception\UnauthorizedException;
use Riot\Exception\UnsupportedMediaTypeException;
use Exception;

class RiotAPI
{
    private string $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @throws InternalServerErrorException
     * @throws UnsupportedMediaTypeException
     * @throws DataNotFoundException
     * @throws BadRequestException
     * @throws BadGatewayException
     * @throws ServiceUnavailableException
     * @throws GatewayTimeoutException
     * @throws UnauthorizedException
     * @throws MethodNotAllowedException
     * @throws RateLimitExceededException
     * @throws ForbiddenException
     * @throws Exception
     */
    public function executeRequest(string $url, array $headers = [], string $method = "GET"): object
    {
        $curl = new Curl();

        // Headers
        $curl->setHeader("X-Riot-Token", $this->getToken());
        if (count($headers) > 0) {
            foreach ($headers as $headerName => $headerValue) {
                $curl->setHeader($headerName, $headerValue);
            }
        }

        // Method
        switch ($method) {
            default:
            case "GET":
                $curl->get($url);
                break;
        }

        // Response handle
        switch ($curl->getHttpStatusCode())
        {
            case 200:
                return $curl->response;
            case 400:
                throw new BadRequestException();
            case 401:
                throw new UnauthorizedException();
            case 403:
                throw new ForbiddenException();
            case 404:
                throw new DataNotFoundException();
            case 405:
                throw new MethodNotAllowedException();
            case 415:
                throw new UnsupportedMediaTypeException();
            case 429:
                throw new RateLimitExceededException();
            case 500:
                throw new InternalServerErrorException();
            case 502:
                throw new BadGatewayException();
            case 503:
                throw new ServiceUnavailableException();
            case 504:
                throw new GatewayTimeoutException();
            default:
                throw new Exception($curl->errorMessage, $curl->getHttpStatusCode());
        }
    }
}