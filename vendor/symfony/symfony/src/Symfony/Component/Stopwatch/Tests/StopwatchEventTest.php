<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Stopwatch\Tests;

use Symfony\Component\Stopwatch\StopwatchEvent;

require_once __DIR__.'/ClockMock.php';

/**
 * StopwatchEventTest.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class StopwatchEventTest extends \PHPUnit_Framework_TestCase
{
    const DELTA = 37;

    public function testGetOrigin()
    {
        $event = new StopwatchEvent(12);
        $this->assertEquals(12, $event->getOrigin());
    }

    public function testGetCategory()
    {
        $event = new StopwatchEvent(microtime(true) * 1000);
        $this->assertEquals('default', $event->getCategory());

        $event = new StopwatchEvent(microtime(true) * 1000, 'cat');
        $this->assertEquals('cat', $event->getCategory());
    }

    public function testGetPeriods()
    {
        $event = new StopwatchEvent(microtime(true) * 1000);
        $this->assertEquals(array(), $event->getPeriods());

        $event = new StopwatchEvent(microtime(true) * 1000);
        $event->start();
        $event->stop();
        $this->assertCount(1, $event->getPeriods());

        $event = new StopwatchEvent(microtime(true) * 1000);
        $event->start();
        $event->stop();
        $event->start();
        $event->stop();
        $this->assertCount(2, $event->getPeriods());
    }

    public function testLap()
    {
        $event = new StopwatchEvent(microtime(true) * 1000);
        $event->start();
        $event->lap();
        $event->stop();
        $this->assertCount(2, $event->getPeriods());
    }

    public function testDuration()
    {
        $event = new StopwatchEvent(microtime(true) * 1000);
        $event->start();
        usleep(200000);
        $event->stop();
        $this->assertEquals(200, $event->getDuration(), null, self::DELTA);

        $event = new StopwatchEvent(microtime(true) * 1000);
        $event->start();
        usleep(100000);
        $event->stop();
        $event->start();
        usleep(100000);
        $event->stop();
        $this->assertEquals(200, $event->getDuration(), null, self::DELTA);
    }

    /**
     * @expectedException \LogicException
     */
    public function testStopWithoutStart()
    {
        $event = new StopwatchEvent(microtime(true) * 1000);
        $event->stop();
    }

    public function testIsStarted()
    {
        $event = new StopwatchEvent(microtime(true) * 1000);
        $event->start();
        $this->assertTrue($event->isStarted());
    }

    public function testIsNotStarted()
    {
        $event = new StopwatchEvent(microtime(true) * 1000);
        $this->assertFalse($event->isStarted());
    }

    public function testEnsureStopped()
    {
        // this also test overlap between two periods
        $event = new StopwatchEvent(microtime(true) * 1000);
        $event->start();
        usleep(100000);
        $event->start();
        usleep(100000);
        $event->ensureStopped();
        $this->assertEquals(300, $event->getDuration(), null, self::DELTA);
    }

    public function testStartTime()
    {
        $event = new StopwatchEvent(microtime(true) * 1000);
        $this->assertLessThanOrEqual(0.5, $event->getStartTime());

        $event = new StopwatchEvent(microtime(true) * 1000);
        $event->start();
        $event->stop();
        $this->assertLessThanOrEqual(1, $event->getStartTime());

        $event = new StopwatchEvent(microtime(true) * 1000);
        $event->start();
        usleep(100000);
        $event->stop();
        $this->assertEquals(0, $event->getStartTime(), null, self::DELTA);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testInvalidOriginThrowsAnException()
    {
        new StopwatchEvent('abc');
    }
}
