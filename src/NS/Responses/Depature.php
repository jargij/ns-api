<?php
namespace Wubs\NS\Responses;


use Illuminate\Support\Str;
use Wubs\NS\Contracts\Depature as DepatureInterface;

class Depature
{
    public $trip_number;
    public $depature_time;
    public $end_station;
    public $train_type;
    public $route_text;
    public $company;
    public $departure_track;
    public $travel_tip;

    function __construct($RitNummer, $VertrekTijd, $VertrekVertraging, $VertrekVertragingTekst, $EindBestemming, $TreinSoort, $RouteTekst, $Vervoerder, $VertrekSpoor, $ReisTip)
    {
        $this->trip_number = $RitNummer;
        $this->depature_time = $VertrekTijd;
        $this->delay = $VertrekVertraging;
        $this->end_station = $EindBestemming;
        $this->delay_text = $VertrekVertragingTekst;
        $this->route_text = $RouteTekst;
        $this->train_type = $TreinSoort;
        $this->company = $Vervoerder;
        $this->departure_track = $VertrekSpoor;
        $this->travel_tip = $ReisTip;

    }


    /**
     * @param \SimpleXMLElement $xml
     * @return Depature
     */
    public static function fromXML(\SimpleXMLElement $xml)
    {
        return new static(
            (string)$xml->RitNummer, 
            (string)$xml->VertrekTijd, 
            (string)$xml->VertrekVertraging, 
            (string)$xml->VertrekVertragingTekst, 
            (string)$xml->EindBestemming, 
            (string)$xml->TreinSoort, 
            (string)$xml->RouteTekst, 
            (string)$xml->Vervoerder, 
            (string)$xml->VertrekSpoor, 
            (string)$xml->ReisTip
        );
    }
}