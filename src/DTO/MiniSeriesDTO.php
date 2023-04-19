<?php

namespace Riot\DTO;

use Exception;

class MiniSeriesDTO
{
    private int $losses;
    private string $progress;
    private int $target;
    private int $wins;

    /**
     * @throws Exception
     */
    public function __construct(int $losses, string $progress, int $target, int $wins)
    {
        $this->losses = $losses;
        $this->progress = $progress;
        $this->target = $target;
        $this->wins = $wins;
    }

    public function getLosses(): int
    {
        return $this->losses;
    }

    public function getProgress(): string
    {
        return $this->progress;
    }

    public function getTarget(): int
    {
        return $this->target;
    }

    public function getWins(): int
    {
        return $this->wins;
    }

    public function toArray(): array
    {
        return [
            "losses" => $this->getLosses(),
            "progress" => $this->getProgress(),
            "target" => $this->getTarget(),
            "wins" => $this->getWins()
        ];
    }
}