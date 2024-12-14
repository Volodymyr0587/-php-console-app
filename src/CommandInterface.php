<?php

namespace Volodymyr\ConsoleApp;

interface CommandInterface
{
    public function execute(array $args = []): int;

    public static function getName(): string;
}
