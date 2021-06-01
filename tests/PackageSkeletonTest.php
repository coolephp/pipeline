<?php

/**
 * This file is part of the coolephp/pipeline.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Coole\Pipeline\Tests;

use Coole\Pipeline\PackageSkeleton;

class PackageSkeletonTest extends TestCase
{
    public function testTest()
    {
        $this->assertTrue(PackageSkeleton::test());
    }
}
