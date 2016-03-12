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

class AgeGroup
{
    /** @var int */
    protected $ageGroupId;

    /** @var int */
    protected $ageMax;

    /** @var int */
    protected $ageMin;

    /** @var string */
    protected $gender;

    /** @var string */
    protected $calculate;

    /** @var int */
    protected $handicap;

    /** @var string */
    protected $levelMax;

    /** @var string */
    protected $levelMin;

    /** @var string */
    protected $levels;

    /** @var string */
    protected $name;

    /** @var Ranking[] */
    protected $rankings = [];

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
     * @return int
     */
    public function getAgeMax()
    {
        return $this->ageMax;
    }

    /**
     * @param int $ageMax
     * @return $this
     */
    public function setAgeMax($ageMax)
    {
        $this->ageMax = $ageMax;

        return $this;
    }

    /**
     * @return int
     */
    public function getAgeMin()
    {
        return $this->ageMin;
    }

    /**
     * @param int $ageMin
     * @return $this
     */
    public function setAgeMin($ageMin)
    {
        $this->ageMin = $ageMin;

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
    public function getCalculate()
    {
        return $this->calculate;
    }

    /**
     * @param string $calculate
     * @return $this
     */
    public function setCalculate($calculate)
    {
        $this->calculate = $calculate;

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
    public function getLevelMax()
    {
        return $this->levelMax;
    }

    /**
     * @param string $levelMax
     * @return $this
     */
    public function setLevelMax($levelMax)
    {
        $this->levelMax = $levelMax;

        return $this;
    }

    /**
     * @return string
     */
    public function getLevelMin()
    {
        return $this->levelMin;
    }

    /**
     * @param string $levelMin
     * @return $this
     */
    public function setLevelMin($levelMin)
    {
        $this->levelMin = $levelMin;

        return $this;
    }

    /**
     * @return string
     */
    public function getLevels()
    {
        return $this->levels;
    }

    /**
     * @param string $levels
     * @return $this
     */
    public function setLevels($levels)
    {
        $this->levels = $levels;

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
     * @return Ranking[]
     */
    public function getRankings()
    {
        return $this->rankings;
    }

    /**
     * @param Ranking[] $rankings
     * @return $this
     */
    public function setRankings($rankings)
    {
        $this->rankings = $rankings;

        return $this;
    }
}
