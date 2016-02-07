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

class RelayPosition
{
    /** @var Athlete */
    protected $athlete;

    /** @var int */
    protected $athleteId;

    /** @var MeetInfo */
    protected $meetInfo;

    /** @var int */
    protected $number;

    /** @var string */
    protected $reactionTime;

    /** @var string */
    protected $status;

    /**
     * @return Athlete
     */
    public function getAthlete()
    {
        return $this->athlete;
    }

    /**
     * @param Athlete $athlete
     * @return $this
     */
    public function setAthlete($athlete)
    {
        $this->athlete = $athlete;

        return $this;
    }

    /**
     * @return int
     */
    public function getAthleteId()
    {
        return $this->athleteId;
    }

    /**
     * @param int $athleteId
     * @return $this
     */
    public function setAthleteId($athleteId)
    {
        $this->athleteId = $athleteId;

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
    public function getReactionTime()
    {
        return $this->reactionTime;
    }

    /**
     * @param string $reactionTime
     * @return $this
     */
    public function setReactionTime($reactionTime)
    {
        $this->reactionTime = $reactionTime;

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
