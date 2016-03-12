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

class Lenex
{
    /** @var Constructor */
    protected $constructor;

    /** @var Meet[] */
    protected $meets = [];

    /** @var RecordList[] */
    protected $recordLists = [];

    /** @var TimeStandardList[] */
    protected $timeStandardLists = [];

    /** @var string */
    protected $version;

    /**
     * @return Constructor
     */
    public function getConstructor()
    {
        return $this->constructor;
    }

    /**
     * @param Constructor $constructor
     * @return $this
     */
    public function setConstructor($constructor)
    {
        $this->constructor = $constructor;

        return $this;
    }

    /**
     * @return Meet[]
     */
    public function getMeets()
    {
        return $this->meets;
    }

    /**
     * @param Meet[] $meets
     * @return $this
     */
    public function setMeets($meets)
    {
        $this->meets = $meets;

        return $this;
    }

    /**
     * @return RecordList[]
     */
    public function getRecordLists()
    {
        return $this->recordLists;
    }

    /**
     * @param RecordList[] $recordLists
     * @return $this
     */
    public function setRecordLists($recordLists)
    {
        $this->recordLists = $recordLists;

        return $this;
    }

    /**
     * @return TimeStandardList[]
     */
    public function getTimeStandardLists()
    {
        return $this->timeStandardLists;
    }

    /**
     * @param TimeStandardList[] $timeStandardLists
     * @return $this
     */
    public function setTimeStandardLists($timeStandardLists)
    {
        $this->timeStandardLists = $timeStandardLists;

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
