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

class Heat
{
    /** @var int */
    protected $ageGroupId;

    /** @var DateTime */
    protected $dayTime;

    /** @var string */
    protected $final;

    /** @var int */
    protected $heatId;

    /** @var int */
    protected $number;

    /** @var int */
    protected $order;

    /** @var string */
    protected $status;

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
    public function getFinal()
    {
        return $this->final;
    }

    /**
     * @param string $final
     * @return $this
     */
    public function setFinal($final)
    {
        $this->final = $final;

        return $this;
    }

    /**
     * @return int
     */
    public function getHeatId()
    {
        return $this->heatId;
    }

    /**
     * @param int $heatId
     * @return $this
     */
    public function setHeatId($heatId)
    {
        $this->heatId = $heatId;

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
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
}
