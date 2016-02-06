<?php
/**
 * @author Leon Verschuren <lverschuren@hotmail.com>
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
