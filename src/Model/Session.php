<?php
/**
 * This file is part of the lenex-php package.
 *
 * The Lenex file format is created by Swimrankings.net
 *
 * (c) Leon Verschuren <lverschuren@hotmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace leonverschuren\Lenex\Model;

use DateTime;

class Session
{
    /** @var string */
    protected $course;

    /** @var DateTime */
    protected $date;

    /** @var string */
    protected $dayTime;

    /** @var string */
    protected $endTime;

    /** @var Event[] */
    protected $events = [];

    /** @var Fee[] */
    protected $fees = [];

    /** @var Judge[] */
    protected $judges = [];

    /** @var int */
    protected $maxEntriesAthlete;

    /** @var int */
    protected $maxEntriesRelay;

    /** @var string */
    protected $name;

    /** @var int */
    protected $number;

    /** @var string */
    protected $officialMeeting;

    /** @var Pool */
    protected $pool;

    /** @var string */
    protected $remarksJudge;

    /** @var string */
    protected $teamLeaderMeeting;

    /** @var string */
    protected $timing;

    /** @var string */
    protected $warmUpFrom;

    /** @var string */
    protected $warmUpUntil;

    /**
     * @return string
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * @param string $course
     * @return $this
     */
    public function setCourse($course)
    {
        $this->course = $course;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param DateTime $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return string
     */
    public function getDayTime()
    {
        return $this->dayTime;
    }

    /**
     * @param string $dayTime
     * @return $this
     */
    public function setDayTime($dayTime)
    {
        $this->dayTime = $dayTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param string $endTime
     * @return $this
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * @return Event[]
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * @param Event[] $events
     * @return $this
     */
    public function setEvents($events)
    {
        $this->events = $events;

        return $this;
    }

    /**
     * @return Fee[]
     */
    public function getFees()
    {
        return $this->fees;
    }

    /**
     * @param Fee[] $fees
     * @return $this
     */
    public function setFees($fees)
    {
        $this->fees = $fees;

        return $this;
    }

    /**
     * @return Judge[]
     */
    public function getJudges()
    {
        return $this->judges;
    }

    /**
     * @param Judge[] $judges
     * @return $this
     */
    public function setJudges($judges)
    {
        $this->judges = $judges;

        return $this;
    }

    /**
     * @return int
     */
    public function getMaxEntriesAthlete()
    {
        return $this->maxEntriesAthlete;
    }

    /**
     * @param int $maxEntriesAthlete
     * @return $this
     */
    public function setMaxEntriesAthlete($maxEntriesAthlete)
    {
        $this->maxEntriesAthlete = $maxEntriesAthlete;

        return $this;
    }

    /**
     * @return int
     */
    public function getMaxEntriesRelay()
    {
        return $this->maxEntriesRelay;
    }

    /**
     * @param int $maxEntriesRelay
     * @return $this
     */
    public function setMaxEntriesRelay($maxEntriesRelay)
    {
        $this->maxEntriesRelay = $maxEntriesRelay;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param int $number
     * @return $this
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * @return string
     */
    public function getOfficialMeeting()
    {
        return $this->officialMeeting;
    }

    /**
     * @param string $officialMeeting
     * @return $this
     */
    public function setOfficialMeeting($officialMeeting)
    {
        $this->officialMeeting = $officialMeeting;

        return $this;
    }

    /**
     * @return Pool
     */
    public function getPool()
    {
        return $this->pool;
    }

    /**
     * @param Pool $pool
     * @return $this
     */
    public function setPool($pool)
    {
        $this->pool = $pool;

        return $this;
    }

    /**
     * @return string
     */
    public function getRemarksJudge()
    {
        return $this->remarksJudge;
    }

    /**
     * @param string $remarksJudge
     * @return $this
     */
    public function setRemarksJudge($remarksJudge)
    {
        $this->remarksJudge = $remarksJudge;

        return $this;
    }

    /**
     * @return string
     */
    public function getTeamLeaderMeeting()
    {
        return $this->teamLeaderMeeting;
    }

    /**
     * @param string $teamLeaderMeeting
     * @return $this
     */
    public function setTeamLeaderMeeting($teamLeaderMeeting)
    {
        $this->teamLeaderMeeting = $teamLeaderMeeting;

        return $this;
    }

    /**
     * @return string
     */
    public function getTiming()
    {
        return $this->timing;
    }

    /**
     * @param string $timing
     * @return $this
     */
    public function setTiming($timing)
    {
        $this->timing = $timing;

        return $this;
    }

    /**
     * @return string
     */
    public function getWarmUpFrom()
    {
        return $this->warmUpFrom;
    }

    /**
     * @param string $warmUpFrom
     * @return $this
     */
    public function setWarmUpFrom($warmUpFrom)
    {
        $this->warmUpFrom = $warmUpFrom;

        return $this;
    }

    /**
     * @return string
     */
    public function getWarmUpUntil()
    {
        return $this->warmUpUntil;
    }

    /**
     * @param string $warmUpUntil
     * @return $this
     */
    public function setWarmUpUntil($warmUpUntil)
    {
        $this->warmUpUntil = $warmUpUntil;

        return $this;
    }
}
