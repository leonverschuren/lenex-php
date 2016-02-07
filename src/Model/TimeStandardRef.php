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

class TimeStandardRef
{
    /** @var int */
    protected $timeStandardListId;

    /** @var Fee */
    protected $fee;

    /** @var string */
    protected $marker;

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
     * @return Fee
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * @param Fee $fee
     * @return $this
     */
    public function setFee(Fee $fee)
    {
        $this->fee = $fee;

        return $this;
    }

    /**
     * @return string
     */
    public function getMarker()
    {
        return $this->marker;
    }

    /**
     * @param string $marker
     * @return $this
     */
    public function setMarker($marker)
    {
        $this->marker = $marker;

        return $this;
    }
}
