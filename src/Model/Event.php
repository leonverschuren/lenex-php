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

class Event
{
    /** @var AgeGroup[] */
    protected $ageGroups;

    /** @var string */
    protected $dayTime;

    /** @var int */
    protected $eventId;

    /** @var Fee */
    protected $fee;

    /** @var string */
    protected $gender;

    /** @var Heat[] */
    protected $heats = [];

    /** @var int */
    protected $maxEntries;

    /** @var int */
    protected $number;

    /** @var int */
    protected $order;

    /** @var int */
    protected $prevEventId;

    /** @var string */
    protected $round;

    /** @var int */
    protected $run;

    /** @var SwimStyle */
    protected $swimStyle;

    /** @var TimeStandardRef[] */
    protected $timeStandardRefs = [];

    /** @var string */
    protected $timing;

    /** @var string */
    protected $type;

    /**
     * @return AgeGroup[]
     */
    public function getAgeGroups()
    {
        return $this->ageGroups;
    }

    /**
     * @param AgeGroup[] $ageGroups
     * @return $this
     */
    public function setAgeGroups($ageGroups)
    {
        $this->ageGroups = $ageGroups;

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
     * @return Fee
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * @param Fee $fee
     * @return $this
     */
    public function setFee($fee)
    {
        $this->fee = $fee;

        return $this;
    }

    /**
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     * @return $this
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * @return Heat[]
     */
    public function getHeats()
    {
        return $this->heats;
    }

    /**
     * @param Heat[] $heats
     * @return $this
     */
    public function setHeats($heats)
    {
        $this->heats = $heats;

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
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param int $order
     * @return $this
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * @return int
     */
    public function getPrevEventId()
    {
        return $this->prevEventId;
    }

    /**
     * @param int $prevEventId
     * @return $this
     */
    public function setPrevEventId($prevEventId)
    {
        $this->prevEventId = $prevEventId;

        return $this;
    }

    /**
     * @return string
     */
    public function getRound()
    {
        return $this->round;
    }

    /**
     * @param string $round
     * @return $this
     */
    public function setRound($round)
    {
        $this->round = $round;

        return $this;
    }

    /**
     * @return int
     */
    public function getRun()
    {
        return $this->run;
    }

    /**
     * @param int $run
     * @return $this
     */
    public function setRun($run)
    {
        $this->run = $run;

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
     * @return TimeStandardRef[]
     */
    public function getTimeStandardRefs()
    {
        return $this->timeStandardRefs;
    }

    /**
     * @param TimeStandardRef[] $timeStandardRefs
     * @return $this
     */
    public function setTimeStandardRefs($timeStandardRefs)
    {
        $this->timeStandardRefs = $timeStandardRefs;

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
}
