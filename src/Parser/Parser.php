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

namespace leonverschuren\Lenex\Parser;

use Closure;
use DateTime;
use leonverschuren\Lenex\Model\AgeDate;
use leonverschuren\Lenex\Model\AgeGroup;
use leonverschuren\Lenex\Model\Constructor;
use leonverschuren\Lenex\Model\Contact;
use leonverschuren\Lenex\Model\Event;
use leonverschuren\Lenex\Model\Fee;
use leonverschuren\Lenex\Model\Heat;
use leonverschuren\Lenex\Model\Judge;
use leonverschuren\Lenex\Model\Lenex;
use leonverschuren\Lenex\Model\Meet;
use leonverschuren\Lenex\Model\PointTable;
use leonverschuren\Lenex\Model\Pool;
use leonverschuren\Lenex\Model\Qualify;
use leonverschuren\Lenex\Model\Ranking;
use leonverschuren\Lenex\Model\Session;
use leonverschuren\Lenex\Model\SwimStyle;
use leonverschuren\Lenex\Model\TimeStandardRef;
use SimpleXMLElement;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Symfony\Component\PropertyAccess\PropertyAccessorInterface;

class Parser
{
    /** @var PropertyAccessorInterface */
    private $accessor;

    public function parseResult(SimpleXMLElement $document)
    {
        return $this->extractLenex($document);
    }


    public function extractLenex(SimpleXMLElement $document)
    {
        $object = new Lenex();

        $fields = [
            'CONSTRUCTOR'      => function (Lenex $object, $value) {
                $object->setConstructor($this->extractConstructor($value));
            },
            'MEETS'            => function (Lenex $object, $value) {
                $object->setMeets($this->extractMeets($value));
            },
            'RECORDLISTS'      => function () {
            },
            'TIMESTANDARDLIST' => function () {
            },
            'version'          => 'version',
        ];

        return $this->transform($document, $fields, $object);
    }


    /**
     * @param SimpleXMLElement $document
     * @return Constructor
     */
    public function extractConstructor(SimpleXMLElement $document)
    {
        $object = new Constructor();

        $fields = [
            'name'         => 'name',
            'registration' => 'registration',
            'version'      => 'version',
            'CONTACT'      => function (Constructor $object, $value) {
                $object->setContact($this->extractContact($value));
            },
        ];

        return $this->transform($document, $fields, $object);
    }


    /**
     * @param SimpleXMLElement $document
     * @return Contact
     */
    public function extractContact(SimpleXMLElement $document)
    {
        $object = new Contact();

        $fields = [
            'city'     => 'city',
            'country'  => 'country',
            'email'    => 'email',
            'fax'      => 'fax',
            'internet' => 'internet',
            'name'     => 'name',
            'mobile'   => 'mobile',
            'phone'    => 'phone',
            'state'    => 'state',
            'street'   => 'street',
            'street2'  => 'street2',
            'zip'      => 'zip',
        ];

        return $this->transform($document, $fields, $object);
    }


    /**
     * @param SimpleXMLElement $document
     * @return Meet[]
     */
    public function extractMeets(SimpleXMLElement $document)
    {
        $objects = [];

        foreach ($document->MEET as $meet) {
            $objects[] = $this->extractMeet($meet);
        }

        return $objects;
    }


    /**
     * @param SimpleXMLElement $document
     * @return Meet
     */
    public function extractMeet(SimpleXMLElement $document)
    {
        $object = new Meet();

        $fields = [
            'AGEDATE'        => function (Meet $object, $value) {
                $object->setAgeDate($this->extractAgeDate($value));
            },
            'altitude'       => 'altitude',
            'city'           => 'city',
            'city.en'        => 'cityEn',
            'CLUBS'          => 'clubs',
            'CONTACT'        => function (Meet $object, $value) {
                $object->setContact($this->extractContact($value));
            },
            'course'         => 'course',
            'deadline'       => function (Meet $object, $value) {
                $object->setDeadline(new DateTime($value));
            },
            'deadlinetime'   => 'deadlineTime',
            'entrystartdate' => function (Meet $object, $value) {
                $object->setEntryStartDate(new DateTime($value));
            },
            'entrytype'      => 'entryType',
            'FEES'           => function (Meet $object, $value) {
                $object->setFees($this->extractFees($value));
            },
            'hostclub'       => 'hostClub',
            'hostclub.url'   => 'hostClubUrl',
            'maxentries'     => 'maxEntries',
            'name'           => 'name',
            'name.en'        => 'nameEn',
            'nation'         => 'nation',
            'number'         => 'number',
            'organizer'      => 'organizer',
            'organizer.url'  => 'organizerUrl',
            'POINTTABLE'     => function (Meet $object, $value) {
                $object->setPointTable($this->extractPointTable($value));
            },
            'POOL'           => function (Meet $object, $value) {
                $object->setPool($this->extractPool($value));
            },
            'QUALIFY'        => function (Meet $object, $value) {
                $object->setQualify($this->extractQualify($value));
            },
            'reservecount'   => 'reserveCount',
            'result.url'     => 'resultUrl',
            'SESSIONS'       => function (Meet $object, $value) {
                $object->setSessions($this->extractSessions($value));
            },
            'startmethod'    => 'startMethod',
            'state'          => 'state',
            'swrid'          => 'swrId',
            'timing'         => 'timing',
            'type'           => 'type',
            'withdrawuntil'  => function (Meet $object, $value) {
                $object->setWithdrawUntil(new DateTime($value));
            },
        ];

        return $this->transform($document, $fields, $object);
    }


    /**
     * @param SimpleXMLElement $document
     * @return AgeDate
     */
    public function extractAgeDate(SimpleXMLElement $document)
    {
        $object = new AgeDate();

        $fields = [
            'type'  => 'type',
            'value' => function (AgeDate $object, $value) {
                $object->setValue(new DateTime($value));
            },
        ];

        return $this->transform($document, $fields, $object);
    }


    /**
     * @param SimpleXMLElement $document
     * @return Fee[]
     */
    public function extractFees(SimpleXMLElement $document)
    {
        $objects = [];

        foreach ($document->FEE as $fee) {
            $objects[] = $this->extractFee($fee);
        }

        return $objects;
    }


    /**
     * @param SimpleXMLElement $document
     * @return Fee
     */
    public function extractFee(SimpleXMLElement $document)
    {
        $object = new Fee();

        $fields = [
            'currency' => 'currency',
            'type'     => 'type',
            'value'    => 'value',
        ];

        return $this->transform($document, $fields, $object);
    }


    /**
     * @param SimpleXMLElement $document
     * @return PointTable
     */
    public function extractPointTable(SimpleXMLElement $document)
    {
        $object = new PointTable();

        $fields = [
            'name'         => 'name',
            'pointtableid' => 'pointTableId',
            'version'      => 'version',
        ];

        return $this->transform($document, $fields, $object);
    }

    /**
     * @param SimpleXMLElement $document
     * @return Pool
     */
    public function extractPool(SimpleXMLElement $document)
    {
        $object = new Pool();

        $fields = [
            'name'        => 'name',
            'lanemax'     => 'laneMax',
            'lanemin'     => 'laneMin',
            'temperature' => 'temperature',
            'type'        => 'type',
        ];

        return $this->transform($document, $fields, $object);
    }


    /**
     * @param SimpleXMLElement $document
     * @return Qualify
     */
    public function extractQualify(SimpleXMLElement $document)
    {
        $object = new Qualify();

        $fields = [
            'conversion' => 'conversion',
            'from'       => 'from',
            'percent'    => 'percent',
            'until'      => 'until',
        ];

        return $this->transform($document, $fields, $object);
    }


    /**
     * @param SimpleXMLElement $document
     * @return Session[]
     */
    public function extractSessions(SimpleXMLElement $document)
    {
        $objects = [];

        foreach ($document->SESSION as $session) {
            $objects[] = $this->extractSession($session);
        }

        return $objects;
    }


    /**
     * @param SimpleXMLElement $document
     * @return Session
     */
    public function extractSession(SimpleXMLElement $document)
    {
        $object = new Session();

        $fields = [
            'course'            => 'course',
            'date'              => function (Session $object, $value) {
                $object->setDate(new DateTime($value));
            },
            'daytime'           => 'dayTime',
            'endtime'           => 'endTime',
            'EVENTS'            => function (Session $object, $value) {
                $object->setEvents($this->extractEvents($value));
            },
            'FEES'              => function (Session $object, $value) {
                $object->setFees($this->extractFees($value));
            },
            'JUDGES'            => function (Session $object, $value) {
                $object->setJudges($this->extractJudges($value));
            },
            'maxentriesathlete' => 'maxEntriesAthlete',
            'maxentriesrelay'   => 'maxEntriesRelay',
            'name'              => 'name',
            'number'            => 'number',
            'officialmeeting'   => 'officialMeeting',
            'POOL'              => function (Session $object, $value) {
                $object->setPool($this->extractPool($value));
            },
            'remarksjudge'      => 'remarksJudge',
            'teamleadermeeting' => 'teamLeaderMeeting',
            'timing'            => 'timing',
            'warmupfrom'        => 'warmUpFrom',
            'warmupuntil'       => 'warmUpUntil',
        ];

        return $this->transform($document, $fields, $object);
    }


    /**
     * @param SimpleXMLElement $document
     * @return Event[]
     */
    public function extractEvents(SimpleXMLElement $document)
    {
        $objects = [];

        foreach ($document->EVENT as $event) {
            $objects[] = $this->extractEvent($event);
        }

        return $objects;
    }


    /**
     * @param SimpleXMLElement $document
     * @return Event
     */
    public function extractEvent(SimpleXMLElement $document)
    {
        $object = new Event();

        $fields = [
            'AGEGROUPS'        => function (Event $object, $value) {
                $object->setAgeGroups($this->extractAgeGroups($value));
            },
            'daytime'          => 'dayTime',
            'eventid'          => 'eventId',
            'FEE'              => function (Event $object, $value) {
                $object->setFee($this->extractFee($value));
            },
            'gender'           => 'gender',
            'HEATS'            => function (Event $object, $value) {
                $object->setHeats($this->extractHeats($value));
            },
            'maxentries'       => 'maxEntries',
            'number'           => 'number',
            'order'            => 'order',
            'preveventid'      => 'prevEventId',
            'round'            => 'round',
            'run'              => 'run',
            'SWIMSTYLE'        => function (Event $object, $value) {
                $object->setSwimStyle($this->extractSwimStyle($value));
            },
            'TIMESTANDARDREFS' => function (Event $object, $value) {
                $object->setTimeStandardRefs($this->extractTimeStandardRefs($value));
            },
            'timing'           => 'timing',
            'type'             => 'type',
        ];

        return $this->transform($document, $fields, $object);
    }


    /**
     * @param SimpleXMLElement $document
     * @return AgeGroup[]
     */
    public function extractAgeGroups(SimpleXMLElement $document)
    {
        $objects = [];

        foreach ($document->AGEGROUP as $ageGroup) {
            $objects[] = $this->extractAgeGroup($ageGroup);
        }

        return $objects;
    }


    public function extractAgeGroup(SimpleXMLElement $document)
    {
        $object = new AgeGroup();

        $fields = [
            'agegroupid' => 'ageGroupId',
            'agemax'     => 'ageMax',
            'agemin'     => 'ageMin',
            'gender'     => 'gender',
            'calculate'  => 'calculate',
            'handicap'   => 'handicap',
            'levelmax'   => 'levelMax',
            'levelmin'   => 'levelMin',
            'levels'     => 'levels',
            'name'       => 'name',
            'RANKINGS'   => function (AgeGroup $object, $value) {
                $object->setRankings($this->extractRankings($value));
            },
        ];

        return $this->transform($document, $fields, $object);
    }


    /**
     * @param SimpleXMLElement $document
     * @return Ranking[]
     */
    public function extractRankings(SimpleXMLElement $document)
    {
        $objects = [];

        foreach ($document->RANKING as $ranking) {
            $objects[] = $this->extractRanking($ranking);
        }

        return $objects;
    }

    /**
     * @param SimpleXMLElement $document
     * @return Ranking
     */
    public function extractRanking(SimpleXMLElement $document)
    {
        $object = new Ranking();

        $fields = [
            'order'    => 'order',
            'place'    => 'place',
            'resultid' => 'resultId',
        ];

        return $this->transform($document, $fields, $object);
    }


    /**
     * @param SimpleXMLElement $document
     * @return Judge[]
     */
    public function extractJudges(SimpleXMLElement $document)
    {
        $objects = [];

        foreach ($document->JUDGE as $judge) {
            $objects[] = $this->extractJudge($judge);
        }

        return $objects;
    }


    /**
     * @param SimpleXMLElement $document
     * @return Judge
     */
    public function extractJudge(SimpleXMLElement $document)
    {
        $object = new Judge();

        $fields = [
            'number'     => 'number',
            'officialid' => 'officialId',
            'remarks'    => 'remarks',
            'role'       => 'role',
        ];

        return $this->transform($document, $fields, $object);
    }

    /**
     * @param SimpleXMLElement $document
     * @return Heat[]
     */
    public function extractHeats(SimpleXMLElement $document)
    {
        $objects = [];

        foreach ($document->HEAT as $heat) {
            $objects[] = $this->extractHeat($heat);
        }

        return $objects;
    }


    /**
     * @param SimpleXMLElement $document
     * @return Heat
     */
    public function extractHeat(SimpleXMLElement $document)
    {
        $object = new Heat();

        $fields = [
            'agegroupid' => 'ageGroupId',
            'daytime'    => 'dayTime',
            'final'      => 'final',
            'heatid'     => 'heatId',
            'number'     => 'number',
            'order'      => 'order',
            'status'     => 'status',
        ];

        return $this->transform($document, $fields, $object);
    }

    /**
     * @param SimpleXMLElement $document
     * @return SwimStyle
     */
    public function extractSwimStyle(SimpleXMLElement $document)
    {
        $object = new SwimStyle();

        $fields = [
            'code'        => 'code',
            'distance'    => 'distance',
            'name'        => 'name',
            'relaycount'  => 'relaycount',
            'stroke'      => 'stroke',
            'swimstyleid' => 'swimStyleId',
            'technique'   => 'technique',
        ];

        return $this->transform($document, $fields, $object);
    }


    /**
     * @param SimpleXMLElement $document
     * @return TimeStandardRef[]
     */
    public function extractTimeStandardRefs(SimpleXMLElement $document)
    {
        $objects = [];

        foreach ($document->TIMESTANDARDREF as $timeStandardRef) {
            $objects[] = $this->extractTimeStandardRef($timeStandardRef);
        }

        return $objects;
    }


    /**
     * @param SimpleXMLElement $document
     * @return TimeStandardRef
     */
    public function extractTimeStandardRef(SimpleXMLElement $document)
    {
        $object = new TimeStandardRef();

        $fields = [
            'timestandardlistid' => 'timeStandardListId',
            'FEE'                => function (TimeStandardRef $object, $value) {
                $object->setFee($this->extractFee($value));
            },
            'marker'             => 'marker',
        ];

        return $this->transform($document, $fields, $object);
    }


    protected function transform(SimpleXMLElement $document, array $fields, $object)
    {
        if (null === $this->accessor) {
            $this->accessor = PropertyAccess::createPropertyAccessor();
        }

        foreach ($fields as $key => $value) {
            if (isset($document[$key])) {
                if ($value instanceof Closure) {
                    call_user_func_array($value, [$object, $document[$key]]);
                } else {
                    $this->accessor->setValue($object, $value, $document[$key]->__toString());
                }
            }

            if (property_exists($document, $key)) {
                if ($value instanceof Closure) {
                    call_user_func_array($value, [$object, $document->$key]);
                } else {
                    $this->accessor->setValue($object, $value, $document->$key);
                }
            }
        }

        return $object;
    }
}
