<?php

namespace Riot\DTO;

use Exception;

class LeagueItemDTO
{
    private bool $freshBlood;
    private int $wins;
    private string $summonerName;
    private MiniSeriesDTO $miniSeries;
    private bool $inactive;
    private bool $veteran;
    private bool $hotStreak;
    private string $rank;
    private int $leaguePoints;
    private int $losses;
    private string $summonerId;

    /**
     * @throws Exception
     */
    public function __construct(bool $freshBlood, int $wins, string $summonerName, array $miniSeries, bool $inactive, bool $veteran, bool $hotStreak, string $rank, int $leaguePoints, int $losses, string $summonerId)
    {
        $this->freshBlood = $freshBlood;
        $this->wins = $wins;
        $this->summonerName = $summonerName;
        $this->miniSeries = new MiniSeriesDTO($miniSeries->losses, $miniSeries->progress, $miniSeries->target, $miniSeries->wins);
        $this->inactive = $inactive;
        $this->veteran = $veteran;
        $this->hotStreak = $hotStreak;
        $this->rank = $rank;
        $this->leaguePoints = $leaguePoints;
        $this->losses = $losses;
        $this->summonerId = $summonerId;
    }

    public function getFreshBlood(): bool
    {
        return $this->freshBlood;
    }

    public function getWins(): int
    {
        return $this->wins;
    }

    public function getSummonerName(): string
    {
        return $this->summonerName;
    }

    public function getMiniSeries(): MiniSeriesDTO
    {
        return $this->miniSeries;
    }

    public function getInactive(): bool
    {
        return $this->inactive;
    }

    public function getVeteran(): bool
    {
        return $this->veteran;
    }

    public function getHotStreak(): bool
    {
        return $this->hotStreak;
    }

    public function getRank(): string
    {
        return $this->rank;
    }

    public function getLeaguePoints(): int
    {
        return $this->leaguePoints;
    }

    public function getLosses(): int
    {
        return $this->losses;
    }

    public function getSummonerId(): string
    {
        return $this->summonerId;
    }

    public function toArray(): array
    {
        return [
            "freshBlood" => $this->getFreshBlood(),
            "wins" => $this->getWins(),
            "summonerName" => $this->getSummonerName(),
            "miniSeries" => $this->getMiniSeries()->toArray(),
            "inactive" => $this->getInactive(),
            "veteran" => $this->getVeteran(),
            "hotStreak" => $this->getHotStreak(),
            "rank" => $this->getRank(),
            "leaguePoints" => $this->getLeaguePoints(),
            "losses" => $this->getLosses(),
            "summonerId" => $this->getSummonerId()
        ];
    }
}