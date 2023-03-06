<?php

namespace Riot\DTO;

use DateTime;
use Exception;

class SummonerDTO
{
    private string $accountId;
    private int $profileIconId;
    private DateTime $revisionDate;
    private string $name;
    private string $id;
    private string $puuid;
    private int $summonerLevel;

    /**
     * @throws Exception
     */
    public function __construct(string $accountId, int $profileIconId, int $revisionDate, string $name, string $id, string $puuid, int $summonerLevel)
    {
        $this->accountId = $accountId;
        $this->profileIconId = $profileIconId;
        $this->revisionDate = new DateTime("@".floor($revisionDate / 1000));
        $this->name = $name;
        $this->id = $id;
        $this->puuid = $puuid;
        $this->summonerLevel = $summonerLevel;
    }

    public function getAccountId(): string
    {
        return $this->accountId;
    }

    public function getProfileIconId(): int
    {
        return $this->profileIconId;
    }

    public function getRevisionDate(): DateTime
    {
        return $this->revisionDate;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getPuuid(): string
    {
        return $this->puuid;
    }

    public function getSummonerLevel(): int
    {
        return $this->summonerLevel;
    }

    public function toArray(): array
    {
        return [
            "accountId" => $this->getAccountId(),
            "profileIconId" => $this->getProfileIconId(),
            "revisionDate" => $this->getRevisionDate(),
            "name" => $this->getName(),
            "id" => $this->getId(),
            "puuid" => $this->getPuuid(),
            "summonerLevel" => $this->getSummonerLevel()
        ];
    }
}