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

use leonverschuren\Lenex\Model\AgeDate;
use leonverschuren\Lenex\Model\AgeGroup;
use leonverschuren\Lenex\Model\Constructor;
use leonverschuren\Lenex\Model\Contact;
use leonverschuren\Lenex\Model\Event;
use leonverschuren\Lenex\Model\Meet;
use leonverschuren\Lenex\Model\PointTable;
use leonverschuren\Lenex\Model\Pool;
use leonverschuren\Lenex\Model\Session;
use leonverschuren\Lenex\Model\SwimStyle;
use leonverschuren\Lenex\Parser;

class ParserTest extends PHPUnit_Framework_TestCase
{
    public function testExtractLenex()
    {
        // Arrange
        $xml = simplexml_load_file(__dir__ . '/test.lef');
        $target = new Parser();

        // Act
        $result = $target->extractLenex($xml);

        // Assert
        $this->assertEquals('3.0', $result->getVersion());
        $this->assertConstructor($result->getConstructor());
        $this->assertMeets($result->getMeets());
    }

    private function assertConstructor(Constructor $result)
    {
        $this->assertEquals('SPLASH Meet Manager 11', $result->getName());
        $this->assertEquals('MZ&PC', $result->getRegistration());
        $this->assertEquals('11.38429', $result->getVersion());
        $this->assertConstructorContact($result->getContact());
    }

    private function assertConstructorContact(Contact $result)
    {
        $this->assertEquals('Bern', $result->getCity());
        $this->assertEquals('CH', $result->getCountry());
        $this->assertEquals('sales@swimrankings.net', $result->getEmail());
        $this->assertEquals('+41 99 999 99 99', $result->getFax());
        $this->assertEquals('http://www.swimrankings.net', $result->getInternet());
        $this->assertEquals('Swimrankings', $result->getName());
        $this->assertEquals(null, $result->getMobile());
        $this->assertEquals('+41 99 999 99 99', $result->getPhone());
        $this->assertEquals(null, $result->getState());
        $this->assertEquals('Weltpoststrasse 5', $result->getStreet());
        $this->assertEquals(null, $result->getStreet2());
        $this->assertEquals('3015', $result->getZip());
    }

    private function assertMeets(array $results)
    {
        /** @var Meet $result */
        $result = $results[0];

        $this->assertAgeDate($result->getAgeDate());
        $this->assertEquals(null, $result->getAltitude());
        $this->assertEquals('Maastricht', $result->getCity());
        $this->assertEquals(null, $result->getCityEn());
        $this->assertEquals([], $result->getClubs());
        $this->assertMeetContact($result->getContact());
        $this->assertEquals('SCM', $result->getCourse());
        $this->assertEquals(new DateTime('2015-12-01'), $result->getDeadline());
        $this->assertEquals(null, $result->getDeadlineTime());
        $this->assertEquals(new DateTime('2015-08-01'), $result->getEntryStartDate());
        $this->assertEquals('OPEN', $result->getEntryType());
        $this->assertEquals([], $result->getFees());
        $this->assertEquals(null, $result->getHostClub());
        $this->assertEquals('http://www.mzpc.nl', $result->getHostClubUrl());
        $this->assertEquals(null, $result->getMaxEntries());
        $this->assertEquals('Speedo International Friendship Swimmeet Maastricht', $result->getName());
        $this->assertEquals(null, $result->getNameEn());
        $this->assertEquals('NED', $result->getNation());
        $this->assertEquals('11737', $result->getNumber());
        $this->assertEquals('MZ&PC', $result->getOrganizer());
        $this->assertEquals('http://www.swimmeetmaastricht.nl', $result->getOrganizerUrl());
        $this->assertPointTable($result->getPointTable());
        $this->assertPool($result->getPool());
        $this->assertEquals(null, $result->getQualify());
        $this->assertEquals(null, $result->getReserveCount());
        $this->assertEquals('http://www.swimmeetmaastricht.nl/2015', $result->getResultUrl());
        $this->assertSessions($result->getSessions());
        $this->assertEquals(null, $result->getStartMethod());
        $this->assertEquals('LB', $result->getState());
        $this->assertEquals(null, $result->getSwrId());
        $this->assertEquals('AUTOMATIC', $result->getTiming());
        $this->assertEquals('NED.INV', $result->getType());
        $this->assertEquals(null, $result->getWithdrawUntil());
    }

    private function assertAgeDate(AgeDate $result)
    {
        $this->assertEquals('CAN.FNQ', $result->getType());
        $this->assertEquals(new DateTime('2015-12-30'), $result->getValue());
    }

    private function assertPool(Pool $result)
    {
        $this->assertEquals('Geusselbad', $result->getName());
        $this->assertEquals(8, $result->getLaneMax());
        $this->assertEquals(1, $result->getLaneMin());
        $this->assertEquals(null, $result->getTemperature());
        $this->assertEquals(null, $result->getType());
    }

    private function assertPointTable(PointTable $result)
    {
        $this->assertEquals('FINA Point Scoring', $result->getName());
        $this->assertEquals(3008, $result->getPointTableId());
        $this->assertEquals('2015', $result->getVersion());
    }

    private function assertMeetContact(Contact $result)
    {
        $this->assertEquals(null, $result->getCity());
        $this->assertEquals(null, $result->getCountry());
        $this->assertEquals('swimmeet@mzpc.nl', $result->getEmail());
        $this->assertEquals(null, $result->getFax());
        $this->assertEquals(null, $result->getInternet());
        $this->assertEquals('Jan van de Ven', $result->getName());
        $this->assertEquals(null, $result->getMobile());
        $this->assertEquals(null, $result->getPhone());
        $this->assertEquals(null, $result->getState());
        $this->assertEquals(null, $result->getStreet());
        $this->assertEquals(null, $result->getStreet2());
        $this->assertEquals(null, $result->getZip());
    }

    private function assertSessions(array $results)
    {
        $this->assertEquals(6, count($results));

        /** @var Session $result */
        $result = $results[0];

        $this->assertEquals(null, $result->getCourse());
        $this->assertEquals(new DateTime('2015-12-28'), $result->getDate());
        $this->assertEquals('08:45', $result->getDayTime());
        $this->assertEquals(null, $result->getEndTime());
        $this->assertEvents($result->getEvents());
        $this->assertEquals([], $result->getFees());
        $this->assertEquals([], $result->getJudges());
        $this->assertEquals(null, $result->getMaxEntriesAthlete());
        $this->assertEquals(null, $result->getMaxEntriesRelay());
        $this->assertEquals('Swimmeet Maastricht series -dag 1-', $result->getName());
        $this->assertEquals(1, $result->getNumber());
        $this->assertEquals('08:00', $result->getOfficialMeeting());
        $this->assertEquals(null, $result->getPool());
        $this->assertEquals(null, $result->getRemarksJudge());
        $this->assertEquals(null, $result->getTeamLeaderMeeting());
        $this->assertEquals(null, $result->getTiming());
        $this->assertEquals('07:45', $result->getWarmUpFrom());
        $this->assertEquals('08:30', $result->getWarmUpUntil());
    }

    private function assertEvents(array $results)
    {
        $this->assertEquals(24, count($results));

        /** @var Event $result */
        $result = $results[0];

        $this->assertAgeGroups($result->getAgeGroups());
        $this->assertEquals(null, $result->getDayTime());
        $this->assertEquals(1127, $result->getEventId());
        $this->assertEquals(null, $result->getFee());
        $this->assertEquals('F', $result->getGender());
        $this->assertEquals([], $result->getHeats());
        $this->assertEquals(null, $result->getMaxEntries());
        $this->assertEquals(19, $result->getNumber());
        $this->assertEquals(21, $result->getOrder());
        $this->assertEquals(-1, $result->getPrevEventId());
        $this->assertEquals('PRE', $result->getRound());
        $this->assertEquals(null, $result->getRun());
        $this->assertSwimStyle($result->getSwimStyle());
        $this->assertEquals([], $result->getTimeStandardRefs());
        $this->assertEquals(null, $result->getTiming());
        $this->assertEquals(null, $result->getType());
    }

    private function assertAgeGroups(array $results)
    {
        $this->assertEquals(1, count($results));

        /** @var AgeGroup $result */
        $result = $results[0];

        $this->assertEquals(1128, $result->getAgeGroupId());
        $this->assertEquals(15, $result->getAgeMax());
        $this->assertEquals(14, $result->getAgeMin());
        $this->assertEquals(null, $result->getGender());
        $this->assertEquals(null, $result->getCalculate());
        $this->assertEquals(-1, $result->getHandicap());
        $this->assertEquals(null, $result->getLevelMax());
        $this->assertEquals(null, $result->getLevelMin());
        $this->assertEquals(null, $result->getLevels());
        $this->assertEquals(null, $result->getName());
        $this->assertEquals([], $result->getRankings());
    }

    private function assertSwimStyle(SwimStyle $result)
    {
        $this->assertEquals(null, $result->getCode());
        $this->assertEquals(100, $result->getDistance());
        $this->assertEquals(null, $result->getName());
        $this->assertEquals(1, $result->getRelayCount());
        $this->assertEquals('FREE', $result->getStroke());
        $this->assertEquals(null, $result->getSwimStyleId());
        $this->assertEquals(null, $result->getTechnique());
    }
}
