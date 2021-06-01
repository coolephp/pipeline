<?php

/**
 * This file is part of the coolephp/pipeline.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Coole\Pipeline\Facade;

use Guanguans\Coole\Facade\Facade;

class Pipeline extends Facade
{
    /**
     * {@inheritdoc}
     */
    public static function getFacadeAccessor()
    {
        return 'pipeline';
    }
}
