<?php
/**
 * @author Leon Verschuren <lverschuren@hotmail.com>
 */

namespace leonverschuren\Lenex\Model;

use DateTime;

class AgeDate
{
    /** @var string */
    protected $type;

    /** @var DateTime */
    protected $value;

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

    /**
     * @return DateTime
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param DateTime $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }
}
