<?php
/**
 * Created by PhpStorm.
 * User: Slava
 * Date: 20.01.2019
 * Time: 22:02
 */

namespace Kargin\Dates;


class BirthDates
{
    private $birthDate;
    private $todayDate;
    public function  __construct($birthDate)
    {
        $this ->birthDate;
        $this->todayDate=date( "Y-m-d");
    }

    public function findTodayDays()
    {
        $birthTime=strtotime($this->birthDate);
        $todayTime=strtotime($this->todayDate);

        $totalSec=$todayTime-$birthTime;
        $totalDays=floor(total/3600/24);
        return $totalDays;
    }
}