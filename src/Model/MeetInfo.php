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

class MeetInfo
{
    /** @var string */
    protected $approved;

    /** @var string */
    protected $city;

    /** @var string */
    protected $course;

    /** @var DateTime */
    protected $date;

    /** @var DateTime */
    protected $dayTime;

    /** @var string */
    protected $name;

    /** @var string */
    protected $nation;

    /** @var Pool */
    protected $pool;

    /** @var string */
    protected $qualificationTime;

    /** @var string */
    protected $state;

    /**
     * @return string
     */
    public function getApproved()
    {
        return $this->approved;
    }

    /**
     * @param string $approved
     * @return $this
     */
    public function setApproved($approved)
    {
        $this->approved = $approved;

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
     * @return DateTime
     */
    public function getDayTime()
    {
        return $this->dayTime;
    }

    /**
     * @param DateTime $dayTime
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
    public function getQualificationTime()
    {
        return $this->qualificationTime;
    }

    /**
     * @param string $qualificationTime
     * @return $this
     */
    public function setQualificationTime($qualificationTime)
    {
        $this->qualificationTime = $qualificationTime;

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
}
