<?php

namespace Msgframework\Lib\Identity;

interface IdentityInterface
{
    public function getId(): int;
    public function load(int $id): void;
    public function getPermissions(): array;
    public function getState(string $key, $default);
    public function getStateFromRequest(string $key, string $request, $default, $filter);
    public function setState(string $key, $value): void;
}