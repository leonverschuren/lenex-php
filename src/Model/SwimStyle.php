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

class SwimStyle
{
    /** @var string */
    protected $code;

    /** @var int */
    protected $distance;

    /** @var string */
    protected $name;

    /** @var int */
    protected $relayCount;

    /** @var string */
    protected $stroke;

    /** @var int */
    protected $swimStyleId;

    /** @var string */
    protected $technique;

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
     * @return int
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * @param int $distance
     * @return $this
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;

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
    public function getRelayCount()
    {
        return $this->relayCount;
    }

    /**
     * @param int $relayCount
     * @return $this
     */
    public function setRelayCount($relayCount)
    {
        $this->relayCount = $relayCount;

        return $this;
    }

    /**
     * @return string
     */
    public function getStroke()
    {
        return $this->stroke;
    }

    /**
     * @param string $stroke
     * @return $this
     */
    public function setStroke($stroke)
    {
        $this->stroke = $stroke;

        return $this;
    }

    /**
     * @return int
     */
    public function getSwimStyleId()
    {
        return $this->swimStyleId;
    }

    /**
     * @param int $swimStyleId
     * @return $this
     */
    public function setSwimStyleId($swimStyleId)
    {
        $this->swimStyleId = $swimStyleId;

        return $this;
    }

    /**
     * @return string
     */
    public function getTechnique()
    {
        return $this->technique;
    }

    /**
     * @param string $technique
     * @return $this
     */
    public function setTechnique($technique)
    {
        $this->technique = $technique;

        return $this;
    }
}
