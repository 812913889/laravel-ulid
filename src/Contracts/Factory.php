<?php
namespace Ariby\Ulid\Contracts;

interface Factory
{
    public function generate(): string;
}