<?php

namespace Msgframework\Lib\Identity;

interface IdentityInterface
{
    public function getId(): int;
    public function isAuth(): bool;
}