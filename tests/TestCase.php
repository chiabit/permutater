<?php

/*
 * This file is part of the Permutater Package
 *
 * (c) AlberTajuelo <info@chiabit.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Chiabit;

class TestCase extends \PHPUnit_Framework_TestCase
{
    /**
     * @return array Record
     */
    public function testRecord()
    {
        $this->assertTrue(Permutater::generate() == "test");
    }

}
