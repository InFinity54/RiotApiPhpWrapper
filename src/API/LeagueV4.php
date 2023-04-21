<?php

namespace Riot\API;

use Exception;
use Riot\DTO\LeagueEntryDTO;
use Riot\DTO\LeagueListDTO;
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

class LeagueV4 extends RiotAPI
{
    /**
     * @param string $queueName
     * @param string $regionId
     * @return LeagueListDTO|null
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
    public function getChallengerLeagueForQueue(string $queueName, string $regionId): ?LeagueListDTO
    {
        $url = "https://".strtolower($regionId).".api.riotgames.com/lol/league/v4/challengerleagues/by-queue/".$queueName;
        $data = $this->executeRequest($url);

        if (gettype($data) === "array" && count($data) > 0) {
            return new LeagueListDTO($data->leagueId, $data->entries, $data->tier, $data->name, $data->queue);
        }

        return null;
    }

    /**
     * @param string $encryptedSummonerId
     * @param string $regionId
     * @return LeagueEntryDTO[]
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
    public function getLeagueEntryForSummoner(string $encryptedSummonerId, string $regionId): array
    {
        $url = "https://".strtolower($regionId).".api.riotgames.com/lol/league/v4/entries/by-summoner/".$encryptedSummonerId;
        $data = $this->executeRequest($url);
        $result = [];

        if (gettype($data) === "array" && count($data) > 0) {
            foreach ($data as $entry) {
                $result[] = new LeagueEntryDTO(
                    $entry->leagueId, $entry->summonerId, $entry->summonerName, $entry->queueType, $entry->tier,
                    $entry->rank, $entry->leaguePoints, $entry->wins, $entry->losses, $entry->hotStreak,
                    $entry->veteran, $entry->freshBlood, $entry->inactive, ($entry->miniSeries ?? null)
                );
            }
        }

        return $result;
    }

    /**
     * @param string $queueName
     * @param string $tierId
     * @param string $divisionId
     * @param string $regionId
     * @return LeagueEntryDTO[]
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
    public function getAllLeagueEntries(string $queueName, string $tierNumber, string $divisionNumber, string $regionId): array
    {
        $url = "https://".strtolower($regionId).".api.riotgames.com/lol/league/v4/entries/".$queueName."/".$tierNumber."/".$divisionNumber;
        $data = $this->executeRequest($url);
        $result = [];

        if (gettype($data) === "array" && count($data) > 0) {
            foreach ($data as $entry) {
                $result[] = new LeagueEntryDTO(
                    $entry->leagueId, $entry->summonerId, $entry->summonerName, $entry->queueType, $entry->tier,
                    $entry->rank, $entry->leaguePoints, $entry->wins, $entry->losses, $entry->hotStreak,
                    $entry->veteran, $entry->freshBlood, $entry->inactive, ($entry->miniSeries ?? null)
                );
            }
        }

        return $result;
    }

    /**
     * @param string $queueName
     * @param string $regionId
     * @return LeagueListDTO|null
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
    public function getGrandmasterLeaguesForQueue(string $queueName, string $regionId): ?LeagueListDTO
    {
        $url = "https://".strtolower($regionId).".api.riotgames.com/lol/league/v4/grandmasterleagues/by-queue/".$queueName;
        $data = $this->executeRequest($url);

        if (gettype($data) === "array" && count($data) > 0) {
            return new LeagueListDTO($data->leagueId, $data->entries, $data->tier, $data->name, $data->queue);
        }

        return null;
    }

    /**
     * @param string $queueName
     * @param string $regionId
     * @return LeagueListDTO|null
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
    public function getLeagueByUUID(string $leagueId, string $regionId): ?LeagueListDTO
    {
        $url = "https://".strtolower($regionId).".api.riotgames.com/lol/league/v4/leagues/".$leagueId;
        $data = $this->executeRequest($url);

        if (gettype($data) === "array" && count($data) > 0) {
            return new LeagueListDTO($data->leagueId, $data->entries, $data->tier, $data->name, $data->queue);
        }

        return null;
    }

    /**
     * @param string $queueName
     * @param string $regionId
     * @return LeagueListDTO|null
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
    public function getMasterLeaguesForQueue(string $queueName, string $regionId): ?LeagueListDTO
    {
        $url = "https://".strtolower($regionId).".api.riotgames.com/lol/league/v4/masterleagues/by-queue/".$queueName;
        $data = $this->executeRequest($url);

        if (gettype($data) === "array" && count($data) > 0) {
            return new LeagueListDTO($data->leagueId, $data->entries, $data->tier, $data->name, $data->queue);
        }

        return null;
    }
}