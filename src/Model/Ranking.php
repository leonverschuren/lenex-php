<?php
/**
 * @author Leon Verschuren <lverschuren@hotmail.com>
 */

namespace leonverschuren\Lenex\Model;

class Ranking
{
    /** @var int */
    protected $order;

    /** @var int */
    protected $place;

    /** @var int */
    protected $resultId;

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
     * @return int
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * @param int $place
     * @return $this
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * @return int
     */
    public function getResultId()
    {
        return $this->resultId;
    }

    /**
     * @param int $resultId
     * @return $this
     */
    public function setResultId($resultId)
    {
        $this->resultId = $resultId;

        return $this;
    }
}
