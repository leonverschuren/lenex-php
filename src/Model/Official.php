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

class Official
{
    /** @var Contact */
    protected $contact;

    /** @var string */
    protected $firstName;

    /** @var string */
    protected $gender;

    /** @var string */
    protected $grade;

    /** @var string */
    protected $lastName;

    /** @var string */
    protected $license;

    /** @var string */
    protected $namePrefix;

    /** @var string */
    protected $nation;

    /** @var int */
    protected $officialId;

    /** @var string */
    protected $passport;

    /**
     * @return Contact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param Contact $contact
     * @return $this
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

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
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * @param string $grade
     * @return $this
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

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
     * @return int
     */
    public function getOfficialId()
    {
        return $this->officialId;
    }

    /**
     * @param int $officialId
     * @return $this
     */
    public function setOfficialId($officialId)
    {
        $this->officialId = $officialId;

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
}
