<?php

declare(strict_types=1);

namespace App\Tests\Trait;

trait SetServiceTrait
{
    /**
     * @template T
     *
     * @param class-string<T> $class
     *
     * @return T
     */
    protected function setService(string $class, ?object $service): void
    {
        $this->getContainer()->set($class, $service);
    }
}
