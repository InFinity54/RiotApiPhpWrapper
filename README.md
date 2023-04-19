# Riot Games APIs PHP Wrapper

Package to use Riot Games APIs more easily and more quickly in your PHP projects. Inspired by [Simivar's PHP wrapper](https://github.com/simivar/riot-php). Wrapper is using [Curl]() to execute HTTP requests. Curl is implemented with [php-curl-class](https://github.com/php-curl-class/php-curl-class) to improve code readability.

⚠ Note that this package is still under development. Everything can change at any moment until development is finished.

## Requirements

You need to have installed and enabled `gettext` extension for PHP. This is needed to allow the translation system to work. **If this extension isn't enabled, wrapper can not work properly.**

## How to install

To install the wrapper in your PHP project, just install it like any other package with Composer.

```bash
composer require infinity54/riotapiphpwrapper
```

## How to use

The `RiotApi` class file is the start point of the wrapper. It contains all the logic of executing requests or other global logics. You don't need to use it directly, use classes in `API` and `Constants` folders in your application instead.
* `API` classes implements available requests from Riot APIs.
* `Constants` classes implements static data, like servers or tiers lists, which can be used (and sometimes required) in some requests.

Some notes about the following example:
* `$yourToken` variable needs to be replaced by your Riot API Token, which can be obtained on [Riot Developer Portal](https://developer.riotgames.com).

```php
// Example: Retrieve data about summoner named "LeagueOfLegends" on EUW server.
$apiSummonerV4 = new Riot\API\SummonerV4($yourToken);
$summonerName = "LeagueOfLegends";
$summonerServerId = Riot\Constants\Servers::euw["id"];
return $apiSummonerV4->getSummonerByName($summonerName, $summonerServerId);
```

## Available APIs

This wrapper is, for the moment, only compatible with _League of Legends_ APIs. Documentation links refers to Riot Games Developer dedicated website.

| API                 | Documentation                                                  | Status |
|---------------------|----------------------------------------------------------------|--------|
| account-v1          | [🔗](https://developer.riotgames.com/apis#account-v1)          | ⛔      |
| champion-mastery-v4 | [🔗](https://developer.riotgames.com/apis#champion-mastery-v4) | ⛔      |
| champion-v3         | [🔗](https://developer.riotgames.com/apis#champion-v3)         | ⛔      |
| clash-v1            | [🔗](https://developer.riotgames.com/apis#clash-v1)            | ⛔      |
| league-exp-v4       | [🔗](https://developer.riotgames.com/apis#league-exp-v4)       | ⛔      |
| league-v4           | [🔗](https://developer.riotgames.com/apis#league-v4)           | ⛔      |
| lol-challenges-v1   | [🔗](https://developer.riotgames.com/apis#lol-challenges-v1)   | ⛔      |
| lol-status-v4       | [🔗](https://developer.riotgames.com/apis#lol-status-v4)       | ⛔      |
| match-v5            | [🔗](https://developer.riotgames.com/apis#match-v5)            | ⛔      |
| spectator-v4        | [🔗](https://developer.riotgames.com/apis#spectator-v4)        | ⛔      |
| summoner-v4         | [🔗](https://developer.riotgames.com/apis#summoner-v4)         | ✅      |
| tournament-stub-v4  | [🔗](https://developer.riotgames.com/apis#tournament-stub-v4)  | ⛔      |
| tournament-v4       | [🔗](https://developer.riotgames.com/apis#tournament-v4)       | ⛔      |
