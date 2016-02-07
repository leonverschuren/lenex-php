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

class Record
{
    /** @var Athlete */
    protected $athlete;

    /** @var string */
    protected $comment;

    /** @var MeetInfo */
    protected $meetInfo;

    /** @var Relay */
    protected $relay;

    /** @var Split */
    protected $splits;

    /** @var SwimStyle */
    protected $swimStyle;

    /** @var string */
    protected $swimTime;

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
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     * @return $this
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

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
     * @return Relay
     */
    public function getRelay()
    {
        return $this->relay;
    }

    /**
     * @param Relay $relay
     * @return $this
     */
    public function setRelay($relay)
    {
        $this->relay = $relay;

        return $this;
    }

    /**
     * @return Split
     */
    public function getSplits()
    {
        return $this->splits;
    }

    /**
     * @param Split $splits
     * @return $this
     */
    public function setSplits($splits)
    {
        $this->splits = $splits;

        return $this;
    }

    /**
     * @return SwimStyle
     */
    public function getSwimStyle()
    {
        return $this->swimStyle;
    }

    /**
     * @param SwimStyle $swimStyle
     * @return $this
     */
    public function setSwimStyle($swimStyle)
    {
        $this->swimStyle = $swimStyle;

        return $this;
    }

    /**
     * @return string
     */
    public function getSwimTime()
    {
        return $this->swimTime;
    }

    /**
     * @param string $swimTime
     * @return $this
     */
    public function setSwimTime($swimTime)
    {
        $this->swimTime = $swimTime;

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
