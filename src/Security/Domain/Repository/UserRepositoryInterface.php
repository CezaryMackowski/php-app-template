<?php

declare(strict_types=1);

namespace App\Security\Domain\Repository;

use App\Security\Domain\Model\User;
use Symfony\Component\Uid\Uuid;

interface UserRepositoryInterface
{
    public function save(User $user): void;

    public function findById(Uuid $uuid): ?User;

    public function findByEmail(string $email): ?User;
}
