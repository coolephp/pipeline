<?php

/**
 * This file is part of the coolephp/pipeline.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Coole\Pipeline;

use Guanguans\Di\Container;
use Guanguans\Di\ServiceProviderInterface;
use Guanguans\Pipeline\Pipeline;

class PipelineServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app->bind(Pipeline::class, function ($app) {
            return new Pipeline($app);
        });
        $app->alias(Pipeline::class, 'pipeline');
    }
}
