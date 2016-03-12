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

class Athlete
{
    /** @var int */
    protected $athleteId;

    /** @var DateTime */
    protected $birthDate;

    /** @var Club */
    protected $club;

    /** @var Entry[] */
    protected $entries = [];

    /** @var string */
    protected $firstName;

    /** @var string */
    protected $firstNameEn;

    /** @var string */
    protected $gender;

    /** @var Handicap */
    protected $handicap;

    /** @var string */
    protected $lastName;

    /** @var string */
    protected $lastNameEn;

    /** @var string */
    protected $level;

    /** @var string */
    protected $license;

    /** @var string */
    protected $namePrefix;

    /** @var string */
    protected $nation;

    /** @var string */
    protected $passport;

    /** @var Result[] */
    protected $results = [];

    /** @var string */
    protected $swrId;

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
     * @return DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * @param DateTime $birthDate
     * @return $this
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

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
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return string
     */
    public function getFirstNameEn()
    {
        return $this->firstNameEn;
    }

    /**
     * @param string $firstNameEn
     * @return $this
     */
    public function setFirstNameEn($firstNameEn)
    {
        $this->firstNameEn = $firstNameEn;

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
     * @return Handicap
     */
    public function getHandicap()
    {
        return $this->handicap;
    }

    /**
     * @param Handicap $handicap
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
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastNameEn()
    {
        return $this->lastNameEn;
    }

    /**
     * @param string $lastNameEn
     * @return $this
     */
    public function setLastNameEn($lastNameEn)
    {
        $this->lastNameEn = $lastNameEn;

        return $this;
    }

    /**
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param string $level
     * @return $this
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * @return string
     */
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * @param string $license
     * @return $this
     */
    public function setLicense($license)
    {
        $this->license = $license;

        return $this;
    }

    /**
     * @return string
     */
    public function getNamePrefix()
    {
        return $this->namePrefix;
    }

    /**
     * @param string $namePrefix
     * @return $this
     */
    public function setNamePrefix($namePrefix)
    {
        $this->namePrefix = $namePrefix;

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
    public function getPassport()
    {
        return $this->passport;
    }

    /**
     * @param string $passport
     * @return $this
     */
    public function setPassport($passport)
    {
        $this->passport = $passport;

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
}
