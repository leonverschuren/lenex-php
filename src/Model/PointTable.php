<?php
/**
 * @author Leon Verschuren <lverschuren@hotmail.com>
 */

namespace leonverschuren\Lenex\Model;

class PointTable
{
    /** @var string */
    protected $name;

    /** @var int */
    protected $pointTableId;

    /** @var string */
    protected $version;

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
    public function getPointTableId()
    {
        return $this->pointTableId;
    }

    /**
     * @param int $pointTableId
     * @return $this
     */
    public function setPointTableId($pointTableId)
    {
        $this->pointTableId = $pointTableId;

        return $this;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }
}
