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

class Relay
{
    /** @var int */
    protected $ageMax;

    /** @var int */
    protected $ageMin;

    /** @var int */
    protected $ageTotalMax;

    /** @var int */
    protected $ageTotalMin;

    /** @var Club */
    protected $club;

    /** @var Entry[] */
    protected $entries = [];

    /** @var string */
    protected $gender;

    /** @var int */
    protected $handicap;

    /** @var string */
    protected $name;

    /** @var int */
    protected $number;

    /** @var RelayPosition[] */
    protected $relayPositions = [];

    /** @var Result[] */
    protected $results = [];

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
     * @return int
     */
    public function getAgeTotalMax()
    {
        return $this->ageTotalMax;
    }

    /**
     * @param int $ageTotalMax
     * @return $this
     */
    public function setAgeTotalMax($ageTotalMax)
    {
        $this->ageTotalMax = $ageTotalMax;

        return $this;
    }

    /**
     * @return int
     */
    public function getAgeTotalMin()
    {
        return $this->ageTotalMin;
    }

    /**
     * @param int $ageTotalMin
     * @return $this
     */
    public function setAgeTotalMin($ageTotalMin)
    {
        $this->ageTotalMin = $ageTotalMin;

        return $this;
    }

    /**
     * @return Club
     */
    public function getClub()
    {
        return $this->club;
    }

    /**
     * @param Club $club
     * @return $this
     */
    public function setClub($club)
    {
        $this->club = $club;

        return $this;
    }

    /**
     * @return Entry[]
     */
    public function getEntries()
    {
        return $this->entries;
    }

    /**
     * @param Entry[] $entries
     * @return $this
     */
    public function setEntries($entries)
    {
        $this->entries = $entries;

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
     * @return Result[]
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * @param Result[] $results
     * @return $this
     */
    public function setResults($results)
    {
        $this->results = $results;

        return $this;
    }
}
