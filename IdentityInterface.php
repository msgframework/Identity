<?php

namespace Msgframework\Lib\Identity;

interface IdentityInterface
{
    public function getId(): int;
    public function load(int $id): void;
    public function getPermissions(): array;
}