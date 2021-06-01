<?php

/**
 * This file is part of the coolephp/pipeline.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Coole\Pipeline\Tests\Benchmark;

use Coole\Pipeline\PackageSkeleton;

/**
 * @BeforeMethods({"setUp"})
 */
final class PackageSkeletonBench
{
    /**
     * @var \Coole\Pipeline\PackageSkeleton
     */
    private $packageSkeleton;

    public function setUp(): void
    {
        $this->packageSkeleton = new PackageSkeleton();
    }

    public function benchTest(): void
    {
        // $this->packageSkeleton->test();
        PackageSkeleton::test();
    }
}
