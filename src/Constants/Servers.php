<?php

namespace Riot\Constants;

class Servers
{
    public static array $br = [ "id" => "BR1", "shortName" => "BR" ];
    public static array $eune = [ "id" => "EUN1", "shortName" => "EUNE" ];
    public static array $euw = [ "id" => "EUW1", "shortName" => "EUW" ];
    public static array $jp = [ "id" => "JP1", "shortName" => "JP" ];
    public static array $kr = [ "id" => "KR", "shortName" => "KR" ];
    public static array $lan = [ "id" => "LA1", "shortName" => "LAN" ];
    public static array $las = [ "id" => "LA2", "shortName" => "LAS" ];
    public static array $na = [ "id" => "NA1", "shortName" => "NA" ];
    public static array $oce = [ "id" => "OC1", "shortName" => "OCE" ];
    public static array $ph = [ "id" => "PH2", "shortName" => "PH" ];
    public static array $ru = [ "id" => "RU", "shortName" => "RU" ];
    public static array $sg = [ "id" => "SG2", "shortName" => "SG" ];
    public static array $th = [ "id" => "TH2", "shortName" => "TH" ];
    public static array $tr = [ "id" => "TR1", "shortName" => "TR" ];
    public static array $tw = [ "id" => "TW2", "shortName" => "TW" ];
    public static array $vn = [ "id" => "VN2", "shortName" => "VN" ];

    public static function getAllServers(): array
    {
        return array(
            self::$br, self::$eune, self::$euw, self::$jp, self::$kr, self::$lan, self::$las, self::$na, self::$oce,
            self::$ph, self::$ru, self::$sg, self::$th, self::$tr, self::$tw, self::$vn
        );
    }
}