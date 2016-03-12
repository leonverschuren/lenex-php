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

class RecordList
{
    /** @var AgeGroup */
    protected $ageGroup;

    /** @var string */
    protected $course;

    /** @var string */
    protected $gender;

    /** @var string */
    protected $handicap;

    /** @var string */
    protected $name;

    /** @var string */
    protected $nation;

    /** @var int */
    protected $order;

    /** @var Record[] */
    protected $records = [];

    /** @var string */
    protected $region;

    /** @var DateTime */
    protected $updated;

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
     * @return string
     */
    public function getHandicap()
    {
        return $this->handicap;
    }

    /**
     * @param string $handicap
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
     * @return Record[]
     */
    public function getRecords()
    {
        return $this->records;
    }

    /**
     * @param Record[] $records
     * @return $this
     */
    public function setRecords($records)
    {
        $this->records = $records;

        return $this;
    }

    /**
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param string $region
     * @return $this
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param DateTime $updated
     * @return $this
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

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
