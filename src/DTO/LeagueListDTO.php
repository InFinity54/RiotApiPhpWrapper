<?php

namespace Riot\DTO;

use Exception;

class LeagueListDTO
{
    private string $leagueId;
    private array $entries = [];
    private string $tier;
    private string $name;
    private string $queue;

    /**
     * @throws Exception
     */
    public function __construct(string $leagueId, array $entries, string $tier, string $name, string $queue)
    {
        $this->leagueId = $leagueId;
        $this->tier = $tier;
        $this->name = $name;
        $this->queue = $queue;

        foreach ($entries as $entry) {
                $this->entries[] = new LeagueItemDTO(
                    $entry->freshBlood, $entry->wins, $entry->summonerName, $entry->miniSeries, $entry->inactive,
                    $entry->veteran, $entry->hotStreak, $entry->rank, $entry->leaguePoints, $entry->losses,
                    $entry->summonerId
                );
        }
    }

    public function getLeagueId(): string
    {
        return $this->leagueId;
    }

    /**
     * @return LeagueItemDTO[]
     */
    public function getEntries(): array
    {
        return $this->entries;
    }

    public function getTier(): string
    {
        return $this->tier;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getQueue(): string
    {
        return $this->queue;
    }

    public function toArray(): array
    {
        return [
            "leagueId" => $this->getLeagueId(),
            "entries" => $this->getEntries(),
            "tier" => $this->getTier(),
            "name" => $this->getName(),
            "queue" => $this->getQueue()
        ];
    }
}