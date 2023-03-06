<?php

namespace Riot\API;

use Riot\DTO\SummonerDTO;
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
use Riot\RiotAPI;
use Exception;

class SummonerV4 extends RiotAPI
{
    /**
     * @param string $rsoPuuid
     * @param string $regionId
     * @return SummonerDTO|null
     * @throws BadGatewayException
     * @throws BadRequestException
     * @throws DataNotFoundException
     * @throws ForbiddenException
     * @throws GatewayTimeoutException
     * @throws InternalServerErrorException
     * @throws MethodNotAllowedException
     * @throws RateLimitExceededException
     * @throws ServiceUnavailableException
     * @throws UnauthorizedException
     * @throws UnsupportedMediaTypeException
     */
    public function getSummonerByRsoPuuid(string $rsoPuuid, string $regionId): ?SummonerDTO
    {
        $url = "https://".strtolower($regionId).".api.riotgames.com/fulfillment/v1/summoners/by-puuid/".$rsoPuuid;
        $data = $this->executeRequest($url);

        if (gettype($data) === "object" && count((array) $data) > 0) {
            return new SummonerDTO($data->accountId, $data->profileIconId, $data->revisionDate, $data->name, $data->id, $data->puuid, $data->summonerLevel);
        }

        return null;
    }

    /**
     * @param string $encryptedAccountId
     * @param string $regionId
     * @return SummonerDTO|null
     * @throws BadGatewayException
     * @throws BadRequestException
     * @throws DataNotFoundException
     * @throws ForbiddenException
     * @throws GatewayTimeoutException
     * @throws InternalServerErrorException
     * @throws MethodNotAllowedException
     * @throws RateLimitExceededException
     * @throws ServiceUnavailableException
     * @throws UnauthorizedException
     * @throws UnsupportedMediaTypeException
     */
    public function getSummonerByEncryptedAccountId(string $encryptedAccountId, string $regionId): ?SummonerDTO
    {
        $url = "https://".strtolower($regionId).".api.riotgames.com/lol/summoner/v4/summoners/by-account/".$encryptedAccountId;
        $data = $this->executeRequest($url);

        if (gettype($data) === "object" && count((array) $data) > 0) {
            return new SummonerDTO($data->accountId, $data->profileIconId, $data->revisionDate, $data->name, $data->id, $data->puuid, $data->summonerLevel);
        }

        return null;
    }

    /**
     * @param string $summonerName
     * @param string $regionId
     * @return SummonerDTO|null
     * @throws BadGatewayException
     * @throws BadRequestException
     * @throws DataNotFoundException
     * @throws ForbiddenException
     * @throws GatewayTimeoutException
     * @throws InternalServerErrorException
     * @throws MethodNotAllowedException
     * @throws RateLimitExceededException
     * @throws ServiceUnavailableException
     * @throws UnauthorizedException
     * @throws UnsupportedMediaTypeException
     * @throws Exception
     */
    public function getSummonerByName(string $summonerName, string $regionId): ?SummonerDTO
    {
        $url = "https://".strtolower($regionId).".api.riotgames.com/lol/summoner/v4/summoners/by-name/".$summonerName;
        $data = $this->executeRequest($url);

        if (gettype($data) === "object" && count((array) $data) > 0) {
            return new SummonerDTO($data->accountId, $data->profileIconId, $data->revisionDate, $data->name, $data->id, $data->puuid, $data->summonerLevel);
        }

        return null;
    }

    /**
     * @param string $puuid
     * @param string $regionId
     * @return SummonerDTO|null
     * @throws BadGatewayException
     * @throws BadRequestException
     * @throws DataNotFoundException
     * @throws ForbiddenException
     * @throws GatewayTimeoutException
     * @throws InternalServerErrorException
     * @throws MethodNotAllowedException
     * @throws RateLimitExceededException
     * @throws ServiceUnavailableException
     * @throws UnauthorizedException
     * @throws UnsupportedMediaTypeException
     */
    public function getSummonerByPuuid(string $puuid, string $regionId): ?SummonerDTO
    {
        $url = "https://".strtolower($regionId).".api.riotgames.com/lol/summoner/v4/summoners/by-puuid/".$puuid;
        $data = $this->executeRequest($url);

        if (gettype($data) === "object" && count((array) $data) > 0) {
            return new SummonerDTO($data->accountId, $data->profileIconId, $data->revisionDate, $data->name, $data->id, $data->puuid, $data->summonerLevel);
        }

        return null;
    }

    /**
     * @param string $accessToken
     * @param string $regionId
     * @return SummonerDTO|null
     * @throws BadGatewayException
     * @throws BadRequestException
     * @throws DataNotFoundException
     * @throws ForbiddenException
     * @throws GatewayTimeoutException
     * @throws InternalServerErrorException
     * @throws MethodNotAllowedException
     * @throws RateLimitExceededException
     * @throws ServiceUnavailableException
     * @throws UnauthorizedException
     * @throws UnsupportedMediaTypeException
     */
    public function getSummonerByRso(string $accessToken, string $regionId): ?SummonerDTO
    {
        $url = "https://".strtolower($regionId).".api.riotgames.com/lol/summoner/v4/summoners/me";
        $headers = [ "Authorization" => "Bearer ".$accessToken ];
        $data = $this->executeRequest($url, $headers);

        if (gettype($data) === "object" && count((array) $data) > 0) {
            return new SummonerDTO($data->accountId, $data->profileIconId, $data->revisionDate, $data->name, $data->id, $data->puuid, $data->summonerLevel);
        }

        return null;
    }

    /**
     * @param string $encryptedSummonerId
     * @param string $regionId
     * @return SummonerDTO|null
     * @throws BadGatewayException
     * @throws BadRequestException
     * @throws DataNotFoundException
     * @throws ForbiddenException
     * @throws GatewayTimeoutException
     * @throws InternalServerErrorException
     * @throws MethodNotAllowedException
     * @throws RateLimitExceededException
     * @throws ServiceUnavailableException
     * @throws UnauthorizedException
     * @throws UnsupportedMediaTypeException
     * @throws Exception
     */
    public function getSummonerByEncryptedSummonerId(string $encryptedSummonerId, string $regionId): ?SummonerDTO
    {
        $url = "https://".strtolower($regionId).".api.riotgames.com/lol/summoner/v4/summoner/".$encryptedSummonerId;
        $data = $this->executeRequest($url);

        if (gettype($data) === "object" && count((array) $data) > 0) {
            return new SummonerDTO($data->accountId, $data->profileIconId, $data->revisionDate, $data->name, $data->id, $data->puuid, $data->summonerLevel);
        }

        return null;
    }
}