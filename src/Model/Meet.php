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

class Meet
{
    /** @var AgeDate */
    protected $ageDate;

    /** @var int */
    protected $altitude;

    /** @var string */
    protected $city;

    /** @var string */
    protected $cityEn;

    /** @var Club[] */
    protected $clubs = [];

    /** @var Contact */
    protected $contact;

    /** @var string */
    protected $course;

    /** @var DateTime */
    protected $deadline;

    /** @var string */
    protected $deadlineTime;

    /** @var DateTime */
    protected $entryStartDate;

    /** @var string */
    protected $entryType;

    /** @var Fee[] */
    protected $fees = [];

    /** @var string */
    protected $hostClub;

    /** @var string */
    protected $hostClubUrl;

    /** @var int */
    protected $maxEntries;

    /** @var string */
    protected $name;

    /** @var string */
    protected $nameEn;

    /** @var string */
    protected $nation;

    /** @var string */
    protected $number;

    /** @var string */
    protected $organizer;

    /** @var string */
    protected $organizerUrl;

    /** @var PointTable */
    protected $pointTable;

    /** @var Pool */
    protected $pool;

    /** @var Qualify */
    protected $qualify;

    /** @var int */
    protected $reserveCount;

    /** @var string */
    protected $resultUrl;

    /** @var Session[] */
    protected $sessions = [];

    /** @var string */
    protected $startMethod;

    /** @var string */
    protected $state;

    /** @var string */
    protected $swrId;

    /** @var string */
    protected $timing;

    /** @var string */
    protected $type;

    /** @var DateTime */
    protected $withdrawUntil;

    /**
     * @return AgeDate
     */
    public function getAgeDate()
    {
        return $this->ageDate;
    }

    /**
     * @param AgeDate $ageDate
     * @return $this
     */
    public function setAgeDate($ageDate)
    {
        $this->ageDate = $ageDate;

        return $this;
    }

    /**
     * @return int
     */
    public function getAltitude()
    {
        return $this->altitude;
    }

    /**
     * @param int $altitude
     * @return $this
     */
    public function setAltitude($altitude)
    {
        $this->altitude = $altitude;

        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return string
     */
    public function getCityEn()
    {
        return $this->cityEn;
    }

    /**
     * @param string $cityEn
     * @return $this
     */
    public function setCityEn($cityEn)
    {
        $this->cityEn = $cityEn;

        return $this;
    }

    /**
     * @return Club[]
     */
    public function getClubs()
    {
        return $this->clubs;
    }

    /**
     * @param Club[] $clubs
     * @return $this
     */
    public function setClubs($clubs)
    {
        $this->clubs = $clubs;

        return $this;
    }

    /**
     * @return Contact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param Contact $contact
     * @return $this
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

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
    public function getDeadline()
    {
        return $this->deadline;
    }

    /**
     * @param DateTime $deadline
     * @return $this
     */
    public function setDeadline($deadline)
    {
        $this->deadline = $deadline;

        return $this;
    }

    /**
     * @return string
     */
    public function getDeadlineTime()
    {
        return $this->deadlineTime;
    }

    /**
     * @param string $deadlineTime
     * @return $this
     */
    public function setDeadlineTime($deadlineTime)
    {
        $this->deadlineTime = $deadlineTime;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getEntryStartDate()
    {
        return $this->entryStartDate;
    }

    /**
     * @param DateTime $entryStartDate
     * @return $this
     */
    public function setEntryStartDate($entryStartDate)
    {
        $this->entryStartDate = $entryStartDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getEntryType()
    {
        return $this->entryType;
    }

    /**
     * @param string $entryType
     * @return $this
     */
    public function setEntryType($entryType)
    {
        $this->entryType = $entryType;

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
     * @return string
     */
    public function getHostClub()
    {
        return $this->hostClub;
    }

    /**
     * @param string $hostClub
     * @return $this
     */
    public function setHostClub($hostClub)
    {
        $this->hostClub = $hostClub;

        return $this;
    }

    /**
     * @return string
     */
    public function getHostClubUrl()
    {
        return $this->hostClubUrl;
    }

    /**
     * @param string $hostClubUrl
     * @return $this
     */
    public function setHostClubUrl($hostClubUrl)
    {
        $this->hostClubUrl = $hostClubUrl;

        return $this;
    }

    /**
     * @return int
     */
    public function getMaxEntries()
    {
        return $this->maxEntries;
    }

    /**
     * @param int $maxEntries
     * @return $this
     */
    public function setMaxEntries($maxEntries)
    {
        $this->maxEntries = $maxEntries;

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
     * @return string
     */
    public function getNameEn()
    {
        return $this->nameEn;
    }

    /**
     * @param string $nameEn
     * @return $this
     */
    public function setNameEn($nameEn)
    {
        $this->nameEn = $nameEn;

        return $this;
    }

    /**
     * @return string
     */
    public function getNation()
    {
        return $this->nation;
    }

    /**
     * @param string $nation
     * @return $this
     */
    public function setNation($nation)
    {
        $this->nation = $nation;

        return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param string $number
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
    public function getOrganizer()
    {
        return $this->organizer;
    }

    /**
     * @param string $organizer
     * @return $this
     */
    public function setOrganizer($organizer)
    {
        $this->organizer = $organizer;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrganizerUrl()
    {
        return $this->organizerUrl;
    }

    /**
     * @param string $organizerUrl
     * @return $this
     */
    public function setOrganizerUrl($organizerUrl)
    {
        $this->organizerUrl = $organizerUrl;

        return $this;
    }

    /**
     * @return PointTable
     */
    public function getPointTable()
    {
        return $this->pointTable;
    }

    /**
     * @param PointTable $pointTable
     * @return $this
     */
    public function setPointTable($pointTable)
    {
        $this->pointTable = $pointTable;

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
     * @return Qualify
     */
    public function getQualify()
    {
        return $this->qualify;
    }

    /**
     * @param Qualify $qualify
     * @return $this
     */
    public function setQualify($qualify)
    {
        $this->qualify = $qualify;

        return $this;
    }

    /**
     * @return int
     */
    public function getReserveCount()
    {
        return $this->reserveCount;
    }

    /**
     * @param int $reserveCount
     * @return $this
     */
    public function setReserveCount($reserveCount)
    {
        $this->reserveCount = $reserveCount;

        return $this;
    }

    /**
     * @return string
     */
    public function getResultUrl()
    {
        return $this->resultUrl;
    }

    /**
     * @param string $resultUrl
     * @return $this
     */
    public function setResultUrl($resultUrl)
    {
        $this->resultUrl = $resultUrl;

        return $this;
    }

    /**
     * @return Session[]
     */
    public function getSessions()
    {
        return $this->sessions;
    }

    /**
     * @param Session[] $sessions
     * @return $this
     */
    public function setSessions($sessions)
    {
        $this->sessions = $sessions;

        return $this;
    }

    /**
     * @return string
     */
    public function getStartMethod()
    {
        return $this->startMethod;
    }

    /**
     * @param string $startMethod
     * @return $this
     */
    public function setStartMethod($startMethod)
    {
        $this->startMethod = $startMethod;

        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return string
     */
    public function getSwrId()
    {
        return $this->swrId;
    }

    /**
     * @param string $swrId
     * @return $this
     */
    public function setSwrId($swrId)
    {
        $this->swrId = $swrId;

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
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getWithdrawUntil()
    {
        return $this->withdrawUntil;
    }

    /**
     * @param DateTime $withdrawUntil
     * @return $this
     */
    public function setWithdrawUntil($withdrawUntil)
    {
        $this->withdrawUntil = $withdrawUntil;

        return $this;
    }
}
