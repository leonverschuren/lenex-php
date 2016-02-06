<?php
/**
 * @author Leon Verschuren <lverschuren@hotmail.com>
 */

namespace leonverschuren\Lenex\Model;

class Handicap
{
    /** @var string */
    protected $breast;

    /** @var string */
    protected $exception;

    /** @var string */
    protected $free;

    /** @var string */
    protected $medley;

    /**
     * @return string
     */
    public function getBreast()
    {
        return $this->breast;
    }

    /**
     * @param string $breast
     * @return $this
     */
    public function setBreast($breast)
    {
        $this->breast = $breast;

        return $this;
    }

    /**
     * @return string
     */
    public function getException()
    {
        return $this->exception;
    }

    /**
     * @param string $exception
     * @return $this
     */
    public function setException($exception)
    {
        $this->exception = $exception;

        return $this;
    }

    /**
     * @return string
     */
    public function getFree()
    {
        return $this->free;
    }

    /**
     * @param string $free
     * @return $this
     */
    public function setFree($free)
    {
        $this->free = $free;

        return $this;
    }

    /**
     * @return string
     */
    public function getMedley()
    {
        return $this->medley;
    }

    /**
     * @param string $medley
     * @return $this
     */
    public function setMedley($medley)
    {
        $this->medley = $medley;

        return $this;
    }
}
