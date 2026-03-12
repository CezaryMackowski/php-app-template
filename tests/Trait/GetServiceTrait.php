<?php

declare(strict_types=1);

namespace App\Tests\Trait;

trait GetServiceTrait
{
    /**
     * @template T
     *
     * @param class-string<T> $class
     *
     * @return T
     */
    protected function getService(string $class)
    {
        /**
         * @var T
         */
        $services = $this->getContainer()->get($class);

        return $services;
    }
}
