<?php

namespace Riot\Constants;

use Riot\RiotConstant;

class Servers extends RiotConstant
{
    private const TRANSLATION_DOMAIN = "serversnames";

    public array $br = [ "id" => "BR1", "shortName" => "BR" ];
    public array $eune = [ "id" => "EUN1", "shortName" => "EUNE" ];
    public array $euw = [ "id" => "EUW1", "shortName" => "EUW" ];
    public array $jp = [ "id" => "JP1", "shortName" => "JP" ];
    public array $kr = [ "id" => "KR", "shortName" => "KR" ];
    public array $lan = [ "id" => "LA1", "shortName" => "LAN" ];
    public array $las = [ "id" => "LA2", "shortName" => "LAS" ];
    public array $na = [ "id" => "NA1", "shortName" => "NA" ];
    public array $oce = [ "id" => "OC1", "shortName" => "OCE" ];
    public array $ph = [ "id" => "PH2", "shortName" => "PH" ];
    public array $ru = [ "id" => "RU", "shortName" => "RU" ];
    public array $sg = [ "id" => "SG2", "shortName" => "SG" ];
    public array $th = [ "id" => "TH2", "shortName" => "TH" ];
    public array $tr = [ "id" => "TR1", "shortName" => "TR" ];
    public array $tw = [ "id" => "TW2", "shortName" => "TW" ];
    public array $vn = [ "id" => "VN2", "shortName" => "VN" ];

    public function __construct($lang)
    {
        parent::__construct($lang);

        // Configure translation system
        bindtextdomain(self::TRANSLATION_DOMAIN, "../../locale");

        // Define servers translated names
        $this->br["name"] = gettext("Brazil");
        $this->eune["name"] = gettext("EU Nordic & East");
        $this->euw["name"] = gettext("EU West");
        $this->jp["name"] = gettext("Japan");
        $this->kr["name"] = gettext("South Korea");
        $this->lan["name"] = gettext("Latin America (North)");
        $this->las["name"] = gettext("Latin America (South)");
        $this->na["name"] = gettext("North America");
        $this->oce["name"] = gettext("Oceania");
        $this->ph["name"] = gettext("Philippines");
        $this->ru["name"] = gettext("Russia");
        $this->sg["name"] = gettext("Singapore, Malaysia & Indonesia");
        $this->th["name"] = gettext("Thailand");
        $this->tr["name"] = gettext("Turkey");
        $this->tw["name"] = gettext("Taiwan, Hong Kong & Macau");
        $this->vn["name"] = gettext("Vietnam");
    }

    public function getAllServers(): array
    {
        return array(
            self::$br, self::$eune, self::$euw, self::$jp, self::$kr, self::$lan, self::$las, self::$na, self::$oce,
            self::$ph, self::$ru, self::$sg, self::$th, self::$tr, self::$tw, self::$vn
        );
    }
}