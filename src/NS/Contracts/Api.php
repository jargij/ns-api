<?php namespace Wubs\NS\Contracts;

interface Api
{

    public function stations();

    public function failures($station, $actual = true, $future = false);

    public function tripAdvise($fromStation, $toStation, $dateTime, $departure);

}