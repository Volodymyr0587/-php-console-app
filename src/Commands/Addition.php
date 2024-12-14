<?php

namespace Volodymyr\ConsoleApp\Commands;

use Volodymyr\ConsoleApp\CommandInterface;

class Addition implements CommandInterface
{
    private static string $name = 'math:addition';

    public function execute(array $args = []): int
    {
        $total = array_sum($args);

        echo "The total sum is: {$total}" . PHP_EOL;

        return 0;        
    }

    public static function getName(): string
    {
        return static::$name;
    }
}
