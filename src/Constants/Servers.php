<?php

namespace Riot\Constants;

class Servers
{
    public static array $br = [
        "id" => "BR1",
        "name" => [
            "en" => "Brazil",
            "fr" => "Brésil"
        ],
        "shortName" => "BR"
    ];

    public static array $eune = [
        "id" => "EUN1",
        "name" => [
            "en" => "EU Nordic & East",
            "fr" => "EU Nord & Est"
        ],
        "shortName" => "EUNE"
    ];

    public static array $euw = [
        "id" => "EUW1",
        "name" => [
            "en" => "EU West",
            "fr" => "EU Ouest"
        ],
        "shortName" => "EUW"
    ];

    public static array $jp = [
        "id" => "JP1",
        "name" => [
            "en" => "Japan",
            "fr" => "Japon"
        ],
        "shortName" => "JP"
    ];

    public static array $kr = [
        "id" => "KR",
        "name" => [
            "en" => "South Korea",
            "fr" => "Corée du Sud"
        ],
        "shortName" => "KR"
    ];

    public static array $lan = [
        "id" => "LA1",
        "name" => [
            "en" => "Latin America (North)",
            "fr" => "Amérique Latine (Nord)"
        ],
        "shortName" => "LAN"
    ];

    public static array $las = [
        "id" => "LA2",
        "name" => [
            "en" => "Latin America (South)",
            "fr" => "Amérique Latine (Sud)"
        ],
        "shortName" => "LAS"
    ];

    public static array $na = [
        "id" => "NA1",
        "name" => [
            "en" => "North America",
            "fr" => "Amérique du Nord"
        ],
        "shortName" => "NA"
    ];

    public static array $oce = [
        "id" => "OC1",
        "name" => [
            "en" => "Oceania",
            "fr" => "Océanie"
        ],
        "shortName" => "OCE"
    ];

    public static array $ph = [
        "id" => "PH2",
        "name" => [
            "en" => "Philippines",
            "fr" => "Philippines"
        ],
        "shortName" => "PH"
    ];

    public static array $ru = [
        "id" => "RU",
        "name" => [
            "en" => "Russia",
            "fr" => "Russie"
        ],
        "shortName" => "RU"
    ];

    public static array $sg = [
        "id" => "SG2",
        "name" => [
            "en" => "Singapore, Malaysia & Indonesia",
            "fr" => "Singapour, Malaisie & Indonésie"
        ],
        "shortName" => "SG"
    ];

    public static array $th = [
        "id" => "TH2",
        "name" => [
            "en" => "Thailand",
            "fr" => "Thaïlande"
        ],
        "shortName" => "TH"
    ];

    public static array $tr = [
        "id" => "TR1",
        "name" => [
            "en" => "Turkey",
            "fr" => "Turquie"
        ],
        "shortName" => "TR"
    ];

    public static array $tw = [
        "id" => "TW2",
        "name" => [
            "en" => "Taiwan, Hong Kong & Macau",
            "fr" => "Taïwan, Hong Kong & Macao"
        ],
        "shortName" => "TW"
    ];

    public static array $vn = [
        "id" => "VN2",
        "name" => [
            "en" => "Vietnam",
            "fr" => "Vietnam"
        ],
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