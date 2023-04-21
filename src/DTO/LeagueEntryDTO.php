<?php

namespace Riot\DTO;

use Exception;

class LeagueEntryDTO
{
    private string $leagueId;
    private string $summonerId;
    private string $summonerName;
    private string $queueType;
    private string $tier;
    private string $rank;
    private int $leaguePoints;
    private int $wins;
    private int $losses;
    private bool $hotStreak;
    private bool $veteran;
    private bool $freshBlood;
    private bool $inactive;
    private ?MiniSeriesDTO $miniSeries;

    /**
     * @throws Exception
     */
    public function __construct(string $leagueId, string $summonerId, string $summonerName, string $queueType, string $tier, string $rank, int $leaguePoints, int $wins, int $losses, bool $hotStreak, bool $veteran, bool $freshBlood, bool $inactive, ?array $miniSeries)
    {
        $this->leagueId = $leagueId;
        $this->summonerId = $summonerId;
        $this->summonerName = $summonerName;
        $this->queueType = $queueType;
        $this->tier = $tier;
        $this->rank = $rank;
        $this->leaguePoints = $leaguePoints;
        $this->wins = $wins;
        $this->losses = $losses;
        $this->hotStreak = $hotStreak;
        $this->veteran = $veteran;
        $this->freshBlood = $freshBlood;
        $this->inactive = $inactive;

        if ($miniSeries !== null) {
            $this->miniSeries = new MiniSeriesDTO($miniSeries->losses, $miniSeries->progress, $miniSeries->target, $miniSeries->wins);
        }
    }

    public function getLeagueId(): string
    {
        return $this->leagueId;
    }

    public function getSummonerId(): string
    {
        return $this->summonerId;
    }

    public function getSummonerName(): string
    {
        return $this->summonerName;
    }

    public function getQueueType(): string
    {
        return $this->queueType;
    }

    public function getTier(): string
    {
        return $this->tier;
    }

    public function getRank(): string
    {
        return $this->rank;
    }

    public function getLeaguePoints(): int
    {
        return $this->leaguePoints;
    }

    public function getWins(): int
    {
        return $this->wins;
    }

    public function getLosses(): int
    {
        return $this->losses;
    }

    public function getHotStreak(): bool
    {
        return $this->hotStreak;
    }

    public function getVeteran(): bool
    {
        return $this->veteran;
    }

    public function getFreshBlood(): bool
    {
        return $this->freshBlood;
    }

    public function getInactive(): bool
    {
        return $this->inactive;
    }

    public function getMiniSeries(): ?MiniSeriesDTO
    {
        return $this->miniSeries;
    }

    public function toArray(): array
    {
        return [
            "leagueId" => $this->getLeagueId(),
            "summonerId" => $this->getSummonerId(),
            "summonerName" => $this->getSummonerName(),
            "queueType" => $this->getQueueType(),
            "tier" => $this->getTier(),
            "rank" => $this->getRank(),
            "leaguePoints" => $this->getLeaguePoints(),
            "wins" => $this->getWins(),
            "losses" => $this->getLosses(),
            "hotStreak" => $this->getHotStreak(),
            "veteran" => $this->getVeteran(),
            "freshBlood" => $this->getFreshBlood(),
            "inactive" => $this->getInactive(),
            "miniSeries" => ($this->getMiniSeries() !== null ? $this->getMiniSeries()->toArray() : null)
        ];
    }
}