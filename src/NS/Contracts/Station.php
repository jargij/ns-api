<?php


namespace Wubs\NS\Contracts;


interface Station
{
    public static function create($data);

    public function getRitNummer();

    public function getCode();

    public function getCountry();

    public function getLatitude();

    public function getLongitude();

    public function isAlias();


}