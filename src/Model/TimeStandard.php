<?php
/**
 * @author Leon Verschuren <lverschuren@hotmail.com>
 */

namespace leonverschuren\Lenex\Model;

class TimeStandard
{
    /** @var SwimStyle */
    protected $swimStyle;

    /** @var string */
    protected $swimTime;

    /**
     * @return SwimStyle
     */
    public function getSwimStyle()
    {
        return $this->swimStyle;
    }

    /**
     * @param SwimStyle $swimStyle
     * @return $this
     */
    public function setSwimStyle($swimStyle)
    {
        $this->swimStyle = $swimStyle;

        return $this;
    }

    /**
     * @return string
     */
    public function getSwimTime()
    {
        return $this->swimTime;
    }

    /**
     * @param string $swimTime
     * @return $this
     */
    public function setSwimTime($swimTime)
    {
        $this->swimTime = $swimTime;

        return $this;
    }
}
