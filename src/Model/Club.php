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

class Club
{
    /** @var Athlete[] */
    protected $athletes = [];

    /** @var string */
    protected $code;

    /** @var Contact */
    protected $contact;

    /** @var string */
    protected $name;

    /** @var string */
    protected $nameEn;

    /** @var string */
    protected $nation;

    /** @var int */
    protected $number;

    /** @var Official[] */
    protected $officials = [];

    /** @var string */
    protected $region;

    /** @var Relay[] */
    protected $relays = [];

    /** @var string */
    protected $shortName;

    /** @var string */
    protected $shortNameEn;

    /** @var int */
    protected $swrId;

    /** @var string */
    protected $type;

    /**
     * @return Athlete[]
     */
    public function getAthletes()
    {
        return $this->athletes;
    }

    /**
     * @param Athlete[] $athletes
     * @return $this
     */
    public function setAthletes($athletes)
    {
        $this->athletes = $athletes;

        return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

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
    public function getNameEn()
    {
        return $this->nameEn;
    }

    /**
     * @param string $nameEn
     * @return $this
     */
    public function setNameEn($nameEn)
    {
        $this->nameEn = $nameEn;

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
     * @return Official[]
     */
    public function getOfficials()
    {
        return $this->officials;
    }

    /**
     * @param Official[] $officials
     * @return $this
     */
    public function setOfficials($officials)
    {
        $this->officials = $officials;

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
     * @return Relay[]
     */
    public function getRelays()
    {
        return $this->relays;
    }

    /**
     * @param Relay[] $relays
     * @return $this
     */
    public function setRelays($relays)
    {
        $this->relays = $relays;

        return $this;
    }

    /**
     * @return string
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * @param string $shortName
     * @return $this
     */
    public function setShortName($shortName)
    {
        $this->shortName = $shortName;

        return $this;
    }

    /**
     * @return string
     */
    public function getShortNameEn()
    {
        return $this->shortNameEn;
    }

    /**
     * @param string $shortNameEn
     * @return $this
     */
    public function setShortNameEn($shortNameEn)
    {
        $this->shortNameEn = $shortNameEn;

        return $this;
    }

    /**
     * @return int
     */
    public function getSwrId()
    {
        return $this->swrId;
    }

    /**
     * @param int $swrId
     * @return $this
     */
    public function setSwrId($swrId)
    {
        $this->swrId = $swrId;

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
