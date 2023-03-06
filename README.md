# Riot Games APIs PHP Wrapper

Package to use Riot Games APIs more easily and more quickly in your PHP projects. Inspired by [Simivar's PHP wrapper](https://github.com/simivar/riot-php). Wrapper is using [Curl]() to execute HTTP requests. Curl is implemented with [php-curl-class](https://github.com/php-curl-class/php-curl-class) to improve code readability.

## Getting started

The wrapper isn't available directly with Composer for the moment, because it is still under development. You can use it in your projects by adding it manually into your `composer.json` file. To do this, open the file, and add the following lines inside it.

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/InFinity54/RiotApiPhpWrapper.git"
    }
  ],
  "require": {
    "infinity54/riotapiphpwrapper": "dev-master"
  }
}
```

Then use `composer update` to update the `vendor` folder.

## How to use

The `RiotApi` class file is the start point of the wrapper. It contains all the logic of executing requests or other global logics. You don't need to use it directly, use classes in `API` and `Constants` folders in your application instead.
* `API` classes implements available requests from Riot APIs.
* `Constants` classes implements static data, like servers or tiers lists, which can be used (and sometimes required) in some requests.

```php
// Example: Retrieve data about summoner named "LeagueOfLegends" on EUW server.
// You will need to retrieve your Riot API Token, and to pass it to API classes.
$apiSummonerV4 = new SummonerV4($yourToken);
$summonerName = "LeagueOfLegends";
$summonerServerId = Riot\Constants\Servers::$euw["id"];
return $apiSummonerV4->getSummonerByName($summonerName, $summonerServerId);
```

## Available APIs

This wrapper is, for the moment, only compatible with _League of Legends_ APIs. Documentation links refers to Riot Games Developer dedicated website.

| API                 | Documentation                                                  | Status |
|---------------------|----------------------------------------------------------------|--------|
| account-v1          | [🔗](https://developer.riotgames.com/apis#account-v1)          | ✅      |
| champion-mastery-v4 | [🔗](https://developer.riotgames.com/apis#champion-mastery-v4) | ⛔      |
| champion-v3         | [🔗](https://developer.riotgames.com/apis#champion-v3)         | ⛔      |
| clash-v1            | [🔗](https://developer.riotgames.com/apis#clash-v1)            | ⛔      |
| league-exp-v4       | [🔗](https://developer.riotgames.com/apis#league-exp-v4)       | ⛔      |
| league-v4           | [🔗](https://developer.riotgames.com/apis#league-v4)           | ⛔      |
| lol-challenges-v1   | [🔗](https://developer.riotgames.com/apis#lol-challenges-v1)   | ⛔      |
| lol-status-v4       | [🔗](https://developer.riotgames.com/apis#lol-status-v4)       | ⛔      |
| match-v5            | [🔗](https://developer.riotgames.com/apis#match-v5)            | ⛔      |
| spectator-v4        | [🔗](https://developer.riotgames.com/apis#spectator-v4)        | ⛔      |
| summoner-v4         | [🔗](https://developer.riotgames.com/apis#summoner-v4)         | ⛔      |
| tournament-stub-v4  | [🔗](https://developer.riotgames.com/apis#tournament-stub-v4)  | ⛔      |
| tournament-v4       | [🔗](https://developer.riotgames.com/apis#tournament-v4)       | ⛔      |