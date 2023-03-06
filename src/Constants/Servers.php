<?php

namespace Riot\Constants;

class Servers
{
    public static array $br = [
        "id" => "BR1",
        "name" => "Brésil",
        "shortName" => "BR"
    ];
    public static array $eune = [
        "id" => "EUN1",
        "name" => "Europe (Nord/Est)",
        "shortName" => "EUNE"
    ];
    public static array $euw = [
        "id" => "EUW1",
        "name" => "Europe (Ouest)",
        "shortName" => "EUW"
    ];
    public static array $jp = [
        "id" => "JP1",
        "name" => "Japon",
        "shortName" => "JP"
    ];
    public static array $kr = [
        "id" => "KR",
        "name" => "Corée du Sud",
        "shortName" => "KR"
    ];
    public static array $lan = [
        "id" => "LA1",
        "name" => "Amérique Latine (Nord)",
        "shortName" => "LAN"
    ];
    public static array $las = [
        "id" => "LA2",
        "name" => "Amérique Latine (Sud)",
        "shortName" => "LAS"
    ];
    public static array $na = [
        "id" => "NA1",
        "name" => "Amérique du Nord",
        "shortName" => "NA"
    ];
    public static array $oce = [
        "id" => "OC1",
        "name" => "Océanie",
        "shortName" => "OCE"
    ];
    public static array $ph = [
        "id" => "PH2",
        "name" => "Philippines",
        "shortName" => "PH"
    ];
    public static array $ru = [
        "id" => "RU",
        "name" => "Russie",
        "shortName" => "RU"
    ];
    public static array $sg = [
        "id" => "SG2",
        "name" => "Singapour, Malaisie & Indonésie",
        "shortName" => "SG"
    ];
    public static array $th = [
        "id" => "TH2",
        "name" => "Thaïlande",
        "shortName" => "TH"
    ];
    public static array $tr = [
        "id" => "TR1",
        "name" => "Turquie",
        "shortName" => "TR"
    ];
    public static array $tw = [
        "id" => "TW2",
        "name" => "Taïwan, Hong Kong & Macao",
        "shortName" => "TW"
    ];
    public static array $vn = [
        "id" => "VN2",
        "name" => "Vietnam",
        "shortName" => "VN"
    ];

    public static function getAllServers(): array
    {
        return array(
            self::$br, self::$eune, self::$euw, self::$jp, self::$kr, self::$lan, self::$las, self::$na, self::$oce,
            self::$ph, self::$ru, self::$sg, self::$th, self::$tr, self::$tw, self::$vn
        );
    }
}