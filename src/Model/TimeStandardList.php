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

class TimeStandardList
{
    /** @var AgeGroup */
    protected $ageGroup;
    
    /** @var string */
    protected $course;

    /** @var string */
    protected $gender;

    /** @var int */
    protected $handicap;

    /** @var string */
    protected $name;

    /** @var int */
    protected $timeStandardListId;
    
    /** @var TimeStandard[] */
    protected $timeStandards = [];

    /** @var string */
    protected $type;

    /**
     * @return AgeGroup
     */
    public function getAgeGroup()
    {
        return $this->ageGroup;
    }

    /**
     * @param AgeGroup $ageGroup
     * @return $this
     */
    public function setAgeGroup($ageGroup)
    {
        $this->ageGroup = $ageGroup;

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
     * @return int
     */
    public function getHandicap()
    {
        return $this->handicap;
    }

    /**
     * @param int $handicap
     * @return $this
     */
    public function setHandicap($handicap)
    {
        $this->handicap = $handicap;

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
    public function getTimeStandardListId()
    {
        return $this->timeStandardListId;
    }

    /**
     * @param int $timeStandardListId
     * @return $this
     */
    public function setTimeStandardListId($timeStandardListId)
    {
        $this->timeStandardListId = $timeStandardListId;

        return $this;
    }

    /**
     * @return TimeStandard[]
     */
    public function getTimeStandards()
    {
        return $this->timeStandards;
    }

    /**
     * @param TimeStandard[] $timeStandards
     * @return $this
     */
    public function setTimeStandards($timeStandards)
    {
        $this->timeStandards = $timeStandards;

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
