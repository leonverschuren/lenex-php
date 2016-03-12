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

class Entry
{
    /** @var int */
    protected $ageGroupId;

    /** @var string */
    protected $entryCourse;

    /** @var string */
    protected $entryTime;

    /** @var int */
    protected $eventId;

    /** @var int */
    protected $heatId;

    /** @var int */
    protected $lane;

    /** @var MeetInfo */
    protected $meetInfo;

    /** @var RelayPosition[] */
    protected $relayPositions = [];

    /** @var string */
    protected $status;

    /**
     * @return int
     */
    public function getAgeGroupId()
    {
        return $this->ageGroupId;
    }

    /**
     * @param int $ageGroupId
     * @return $this
     */
    public function setAgeGroupId($ageGroupId)
    {
        $this->ageGroupId = $ageGroupId;

        return $this;
    }

    /**
     * @return string
     */
    public function getEntryCourse()
    {
        return $this->entryCourse;
    }

    /**
     * @param string $entryCourse
     * @return $this
     */
    public function setEntryCourse($entryCourse)
    {
        $this->entryCourse = $entryCourse;

        return $this;
    }

    /**
     * @return string
     */
    public function getEntryTime()
    {
        return $this->entryTime;
    }

    /**
     * @param string $entryTime
     * @return $this
     */
    public function setEntryTime($entryTime)
    {
        $this->entryTime = $entryTime;

        return $this;
    }

    /**
     * @return int
     */
    public function getEventId()
    {
        return $this->eventId;
    }

    /**
     * @param int $eventId
     * @return $this
     */
    public function setEventId($eventId)
    {
        $this->eventId = $eventId;

        return $this;
    }

    /**
     * @return int
     */
    public function getHeatId()
    {
        return $this->heatId;
    }

    /**
     * @param int $heatId
     * @return $this
     */
    public function setHeatId($heatId)
    {
        $this->heatId = $heatId;

        return $this;
    }

    /**
     * @return int
     */
    public function getLane()
    {
        return $this->lane;
    }

    /**
     * @param int $lane
     * @return $this
     */
    public function setLane($lane)
    {
        $this->lane = $lane;

        return $this;
    }

    /**
     * @return MeetInfo
     */
    public function getMeetInfo()
    {
        return $this->meetInfo;
    }

    /**
     * @param MeetInfo $meetInfo
     * @return $this
     */
    public function setMeetInfo($meetInfo)
    {
        $this->meetInfo = $meetInfo;

        return $this;
    }

    /**
     * @return RelayPosition[]
     */
    public function getRelayPositions()
    {
        return $this->relayPositions;
    }

    /**
     * @param RelayPosition[] $relayPositions
     * @return $this
     */
    public function setRelayPositions($relayPositions)
    {
        $this->relayPositions = $relayPositions;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
}
